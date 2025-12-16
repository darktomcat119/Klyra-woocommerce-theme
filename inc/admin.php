<?php
/**
 * Admin Customizations
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add admin customizations
 *
 * @since 1.0.0
 */
function klyra_admin_init() {
	// Admin customizations can be added here
}
add_action( 'admin_init', 'klyra_admin_init' );

