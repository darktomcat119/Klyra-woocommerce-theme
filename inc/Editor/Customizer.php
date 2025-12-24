<?php
/**
 * Theme Customizer
 *
 * Handles advanced customization features
 *
 * @package Klyra
 * @since 1.0.0
 */

namespace Klyra\Editor;

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Customizer Class
 *
 * @since 1.0.0
 */
class Customizer {

	/**
	 * Initialize customizer
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customizer_settings' ) );
		add_action( 'wp_head', array( $this, 'output_custom_css' ) );
	}

	/**
	 * Register customizer settings
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer object
	 * @since 1.0.0
	 */
	public function register_customizer_settings( $wp_customize ) {
		// Add customizer sections and settings here
		// This is a placeholder for future advanced customization features
		
		// Example: Container width setting
		$wp_customize->add_setting(
			'klyra_container_width',
			array(
				'default'           => '1200px',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'klyra_container_width',
			array(
				'label'       => __( 'Container Width', 'klyra' ),
				'section'     => 'klyra_layout',
				'type'        => 'text',
				'description' => __( 'Set the maximum container width (e.g., 1200px, 1400px)', 'klyra' ),
			)
		);
	}

	/**
	 * Output custom CSS
	 *
	 * @since 1.0.0
	 */
	public function output_custom_css() {
		$container_width = get_theme_mod( 'klyra_container_width', '1200px' );
		
		if ( $container_width && $container_width !== '1200px' ) {
			echo '<style id="klyra-custom-css">';
			echo ':root { --wp--custom--layout--content-size: ' . esc_attr( $container_width ) . '; }';
			echo '</style>';
		}
	}
}

