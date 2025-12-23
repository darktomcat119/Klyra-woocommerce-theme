<?php
/**
 * License Manager
 *
 * Handles license validation and management
 *
 * @package Klyra
 * @since 1.0.0
 */

namespace Klyra\Integrations\License;

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * License Manager Class
 *
 * @since 1.0.0
 */
class LicenseManager {

	/**
	 * License key
	 *
	 * @var string
	 */
	private $license_key;

	/**
	 * License status
	 *
	 * @var string
	 */
	private $license_status;

	/**
	 * API endpoint URL
	 *
	 * @var string
	 */
	private $api_url;

	/**
	 * Current domain
	 *
	 * @var string
	 */
	private $domain;

	/**
	 * Product identifier
	 *
	 * @var string
	 */
	private $product_id;

	/**
	 * Option name for license key
	 *
	 * @var string
	 */
	private $option_key;

	/**
	 * Option name for license status
	 *
	 * @var string
	 */
	private $status_option_key;

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->api_url          = apply_filters( 'klyra_license_api_url', 'https://api.example.com/v1/license' );
		$this->product_id       = apply_filters( 'klyra_license_product_id', 'klyra' );
		$this->option_key       = 'klyra_license_key';
		$this->status_option_key = 'klyra_license_status';
		$this->domain           = $this->get_domain();

		$this->load_license();
	}

	/**
	 * Get current domain
	 *
	 * @return string
	 * @since 1.0.0
	 */
	private function get_domain() {
		$domain = home_url();
		$domain = parse_url( $domain, PHP_URL_HOST );
		return $domain;
	}

	/**
	 * Load license from database
	 *
	 * @since 1.0.0
	 */
	private function load_license() {
		$this->license_key   = get_option( $this->option_key, '' );
		$this->license_status = get_option( $this->status_option_key, 'inactive' );
	}

	/**
	 * Activate license
	 *
	 * @param string $license_key License key
	 * @return array Result array with success and message
	 * @since 1.0.0
	 */
	public function activate_license( $license_key ) {
		$license_key = sanitize_text_field( $license_key );

		if ( empty( $license_key ) ) {
			return array(
				'success' => false,
				'message' => __( 'License key is required.', 'klyra' ),
			);
		}

		// Validate license key format (basic validation)
		if ( strlen( $license_key ) < 10 ) {
			return array(
				'success' => false,
				'message' => __( 'Invalid license key format.', 'klyra' ),
			);
		}

		// Attempt remote validation (if API is configured)
		if ( $this->api_url !== 'https://api.example.com/v1/license' ) {
			$validation = $this->validate_license_remote( $license_key );
			if ( ! $validation['success'] ) {
				return $validation;
			}
		}

		// Save license key
		update_option( $this->option_key, $license_key );
		update_option( $this->status_option_key, 'active' );
		update_option( 'klyra_license_domain', $this->domain );

		$this->license_key   = $license_key;
		$this->license_status = 'active';

		return array(
			'success' => true,
			'message' => __( 'License activated successfully.', 'klyra' ),
		);
	}

	/**
	 * Deactivate license
	 *
	 * @return array Result array with success and message
	 * @since 1.0.0
	 */
	public function deactivate_license() {
		// Attempt remote deactivation (if API is configured)
		if ( $this->api_url !== 'https://api.example.com/v1/license' && ! empty( $this->license_key ) ) {
			$this->deactivate_license_remote( $this->license_key );
		}

		// Remove license data
		delete_option( $this->option_key );
		delete_option( $this->status_option_key );
		delete_option( 'klyra_license_domain' );

		$this->license_key   = '';
		$this->license_status = 'inactive';

		return array(
			'success' => true,
			'message' => __( 'License deactivated successfully.', 'klyra' ),
		);
	}

	/**
	 * Validate license remotely
	 *
	 * @param string $license_key License key
	 * @return array Result array
	 * @since 1.0.0
	 */
	private function validate_license_remote( $license_key ) {
		$response = wp_remote_post(
			$this->api_url . '/validate',
			array(
				'body' => array(
					'license_key' => $license_key,
					'domain'      => $this->domain,
					'product_id'  => $this->product_id,
				),
				'timeout' => 15,
			)
		);

		if ( is_wp_error( $response ) ) {
			// Graceful fallback - allow activation if API is unreachable
			return array(
				'success' => true,
				'message' => __( 'License activated (offline mode).', 'klyra' ),
			);
		}

		$body = json_decode( wp_remote_retrieve_body( $response ), true );

		if ( isset( $body['valid'] ) && $body['valid'] === true ) {
			return array(
				'success' => true,
				'message' => __( 'License validated successfully.', 'klyra' ),
			);
		}

		return array(
			'success' => false,
			'message' => isset( $body['message'] ) ? $body['message'] : __( 'License validation failed.', 'klyra' ),
		);
	}

	/**
	 * Deactivate license remotely
	 *
	 * @param string $license_key License key
	 * @return void
	 * @since 1.0.0
	 */
	private function deactivate_license_remote( $license_key ) {
		wp_remote_post(
			$this->api_url . '/deactivate',
			array(
				'body' => array(
					'license_key' => $license_key,
					'domain'      => $this->domain,
					'product_id'  => $this->product_id,
				),
				'timeout' => 15,
			)
		);
	}

	/**
	 * Validate license (check status)
	 *
	 * @param bool $force_remote Force remote validation
	 * @return bool True if license is valid
	 * @since 1.0.0
	 */
	public function validate_license( $force_remote = false ) {
		if ( empty( $this->license_key ) ) {
			return false;
		}

		if ( $this->license_status === 'active' && ! $force_remote ) {
			return true;
		}

		if ( $force_remote && $this->api_url !== 'https://api.example.com/v1/license' ) {
			$validation = $this->validate_license_remote( $this->license_key );
			if ( $validation['success'] ) {
				update_option( $this->status_option_key, 'active' );
				$this->license_status = 'active';
				return true;
			}
		}

		return $this->license_status === 'active';
	}

	/**
	 * Check if license is active
	 *
	 * @return bool True if licensed
	 * @since 1.0.0
	 */
	public function is_licensed() {
		return $this->validate_license();
	}

	/**
	 * Get license status
	 *
	 * @return string License status
	 * @since 1.0.0
	 */
	public function get_status() {
		return $this->license_status;
	}

	/**
	 * Get masked license key
	 *
	 * @return string Masked license key
	 * @since 1.0.0
	 */
	public function get_license_key_masked() {
		if ( empty( $this->license_key ) ) {
			return '';
		}

		$length = strlen( $this->license_key );
		if ( $length <= 8 ) {
			return str_repeat( '*', $length );
		}

		return substr( $this->license_key, 0, 4 ) . str_repeat( '*', $length - 8 ) . substr( $this->license_key, -4 );
	}
}

