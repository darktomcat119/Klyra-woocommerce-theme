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
		add_action( 'after_setup_theme', array( $this, 'add_editor_styles' ) );
	}

	/**
	 * Add editor styles so styling appears in block editor too
	 *
	 * @since 1.0.0
	 */
	public function add_editor_styles() {
		add_editor_style( 'assets/css/style.css' );
	}

	/**
	 * Enqueue theme styles
	 *
	 * @since 1.0.0
	 */
	public function enqueue_styles() {
		// Enqueue theme stylesheet if it exists
		$css_path = get_template_directory() . '/assets/css/style.css';
		if ( file_exists( $css_path ) ) {
			$ver = (string) filemtime( $css_path );
			wp_enqueue_style(
				'klyra-style',
				get_template_directory_uri() . '/assets/css/style.css',
				array(),
				$ver
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

