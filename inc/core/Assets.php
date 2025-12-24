<?php
/**
 * Asset Management
 *
 * Handles theme styles and scripts
 *
 * @package Klyra
 * @since 1.0.0
 */

namespace Klyra\Core;

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Asset Management Class
 *
 * @since 1.0.0
 */
class Assets {

	/**
	 * Initialize asset management
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * Enqueue theme styles
	 *
	 * @since 1.0.0
	 */
	public function enqueue_styles() {
		// Enqueue theme stylesheet if it exists
		if ( file_exists( get_template_directory() . '/assets/css/style.css' ) ) {
			wp_enqueue_style(
				'klyra-style',
				get_template_directory_uri() . '/assets/css/style.css',
				array(),
				KLYRA_VERSION
			);
		}
	}

	/**
	 * Enqueue theme scripts
	 *
	 * @since 1.0.0
	 */
	public function enqueue_scripts() {
		// Debug-only: A11y audit for label[for] mismatches (admin-triggered)
		if (
			is_user_logged_in()
			&& current_user_can( 'manage_options' )
			&& isset( $_GET['klyra_a11y'] )
			&& file_exists( get_template_directory() . '/assets/js/a11y-label-audit.js' )
		) {
			wp_enqueue_script(
				'klyra-a11y-label-audit',
				get_template_directory_uri() . '/assets/js/a11y-label-audit.js',
				array(),
				KLYRA_VERSION,
				true
			);
		}
	}
}

