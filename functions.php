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

// Load utilities early (needed for patterns)
// Try uppercase first, fallback to lowercase for Windows compatibility
$helpers_path = KLYRA_DIR . '/inc/Utilities/Helpers.php';
if ( ! file_exists( $helpers_path ) ) {
	$helpers_path = KLYRA_DIR . '/inc/utilities/helpers.php';
}
if ( file_exists( $helpers_path ) ) {
	require_once $helpers_path;
} else {
	// Fallback: try to load from either location (Windows case-insensitive)
	$possible_paths = array(
		KLYRA_DIR . '/inc/Utilities/Helpers.php',
		KLYRA_DIR . '/inc/utilities/helpers.php',
	);
	foreach ( $possible_paths as $path ) {
		if ( file_exists( $path ) ) {
			require_once $path;
			break;
		}
	}
}

// Load theme components via modern loader
require_once KLYRA_DIR . '/inc/Loader.php';

