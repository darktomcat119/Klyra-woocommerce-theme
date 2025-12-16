<?php
/**
 * Klyra Theme Functions
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define theme constants
define( 'KLYRA_VERSION', '1.0.0' );
define( 'KLYRA_DIR', get_template_directory() );
define( 'KLYRA_URI', get_template_directory_uri() );
define( 'KLYRA_TEXT_DOMAIN', 'klyra' );

// Load theme components
require_once KLYRA_DIR . '/inc/setup.php';
require_once KLYRA_DIR . '/inc/woocommerce.php';
require_once KLYRA_DIR . '/inc/admin.php';
require_once KLYRA_DIR . '/inc/license.php';

