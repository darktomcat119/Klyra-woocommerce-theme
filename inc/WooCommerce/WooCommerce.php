<?php
/**
 * WooCommerce Integration
 *
 * Handles WooCommerce theme support and customizations
 *
 * @package Klyra
 * @since 1.0.0
 */

namespace Klyra\WooCommerce;

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WooCommerce Integration Class
 *
 * @since 1.0.0
 */
class WooCommerce {

	/**
	 * Initialize WooCommerce integration
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'add_woocommerce_support' ) );
	}

	/**
	 * Add WooCommerce support
	 *
	 * @since 1.0.0
	 */
	public function add_woocommerce_support() {
		// Check if WooCommerce is active
		if ( ! class_exists( 'WooCommerce' ) ) {
			return;
		}

		// Add WooCommerce support
		add_theme_support( 'woocommerce' );

		// Add support for WooCommerce features
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		// Declare WooCommerce compatibility
		add_theme_support(
			'woocommerce',
			array(
				'thumbnail_image_width' => 300,
				'single_image_width'    => 600,
				'product_grid'          => array(
					'default_rows'    => 3,
					'min_rows'        => 2,
					'max_rows'        => 8,
					'default_columns' => 4,
					'min_columns'     => 2,
					'max_columns'     => 5,
				),
			)
		);
	}
}

