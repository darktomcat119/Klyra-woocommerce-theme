<?php
/**
 * WooCommerce Support
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add WooCommerce support
 *
 * @since 1.0.0
 */
function klyra_woocommerce_support() {
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
add_action( 'after_setup_theme', 'klyra_woocommerce_support' );

