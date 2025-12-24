<?php
/**
 * WooCommerce Enhancements
 *
 * Additional WooCommerce features and customizations
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
 * WooCommerce Enhancements Class
 *
 * @since 1.0.0
 */
class Enhancements {

	/**
	 * Initialize WooCommerce enhancements
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		// Only load if WooCommerce is active
		if ( ! class_exists( 'WooCommerce' ) ) {
			return;
		}

		// Add product image zoom on hover
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_woocommerce_scripts' ) );
		
		// Enhance product gallery
		add_filter( 'woocommerce_single_product_image_gallery_classes', array( $this, 'add_gallery_classes' ) );
		
		// Improve cart/checkout experience
		add_action( 'woocommerce_before_cart', array( $this, 'add_cart_enhancements' ) );
	}

	/**
	 * Enqueue WooCommerce enhancement scripts
	 *
	 * @since 1.0.0
	 */
	public function enqueue_woocommerce_scripts() {
		if ( is_product() || is_shop() || is_cart() || is_checkout() ) {
			// Future: Add custom WooCommerce JavaScript here
			// wp_enqueue_script( 'klyra-woocommerce', ... );
		}
	}

	/**
	 * Add gallery classes
	 *
	 * @param array $classes Gallery classes
	 * @return array Modified classes
	 * @since 1.0.0
	 */
	public function add_gallery_classes( $classes ) {
		$classes[] = 'klyra-product-gallery';
		return $classes;
	}

	/**
	 * Add cart enhancements
	 *
	 * @since 1.0.0
	 */
	public function add_cart_enhancements() {
		// Future: Add cart enhancement features
		// Example: Sticky cart, cart abandonment, etc.
	}
}

