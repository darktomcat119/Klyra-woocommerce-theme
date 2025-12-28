<?php
/**
 * Clear customized templates from database
 * Run this file once to reset templates to file-based versions
 * DELETE THIS FILE AFTER RUNNING
 */

// Load WordPress
require_once dirname( __FILE__ ) . '/../../../wp-load.php';

if ( ! current_user_can( 'manage_options' ) && php_sapi_name() !== 'cli' ) {
	die( 'Access denied - please log in as admin first' );
}

echo "<pre style='font-family: monospace; padding: 20px; background: #1a1a2e; color: #a0ffa0; font-size: 14px;'>\n";
echo "=== Klyra Template Cache Clear ===\n\n";

// Find customized templates
$templates = get_posts( array(
	'post_type'      => 'wp_template',
	'posts_per_page' => -1,
	'post_status'    => 'any',
) );

echo "Found " . count( $templates ) . " customized templates:\n";
foreach ( $templates as $t ) {
	echo "  - {$t->post_name}\n";
}

// Find customized template parts
$parts = get_posts( array(
	'post_type'      => 'wp_template_part',
	'posts_per_page' => -1,
	'post_status'    => 'any',
) );

echo "\nFound " . count( $parts ) . " customized template parts:\n";
foreach ( $parts as $p ) {
	echo "  - {$p->post_name}\n";
}

// Delete home template if it exists
$home_templates = get_posts( array(
	'post_type'      => 'wp_template',
	'name'           => 'home',
	'posts_per_page' => 1,
	'post_status'    => 'any',
) );

if ( ! empty( $home_templates ) ) {
	$deleted = wp_delete_post( $home_templates[0]->ID, true );
	if ( $deleted ) {
		echo "\n<span style='color: #50fa7b;'>✓ Deleted customized 'home' template</span>\n";
		echo "  WordPress will now use the file-based version\n";
	}
} else {
	echo "\n<span style='color: #f1fa8c;'>ℹ No customized 'home' template found in database</span>\n";
}

// Clear caches
delete_transient( 'wp_theme_files_klyra' );
if ( function_exists( 'wp_cache_flush' ) ) {
	wp_cache_flush();
}

echo "\n<span style='color: #50fa7b;'>✓ Cache cleared</span>\n";
echo "\n<strong style='color: #fff;'>Now:</strong>\n";
echo "  1. <a href='" . home_url() . "' style='color: #8be9fd;'>Refresh your homepage</a> (Ctrl+Shift+R for hard refresh)\n";
echo "  2. Delete this file from: wp-content/themes/klyra/clear-template-cache.php\n";
echo "</pre>";

