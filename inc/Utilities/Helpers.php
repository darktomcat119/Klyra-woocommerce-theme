<?php
/**
 * Helper Functions
 *
 * Utility functions for the theme
 *
 * @package Klyra
 * @since 1.0.0
 */

namespace Klyra\Utilities {
	// Prevent direct access
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Helper Functions Class
	 *
	 * @since 1.0.0
	 */
	class Helpers {

	/**
	 * Get theme image URL with cache-busting
	 *
	 * @since 1.0.0
	 * @param string $image_path Relative path to image from assets/images directory.
	 * @return string Image URL with version parameter for cache-busting.
	 */
	public static function get_image_url( $image_path ) {
		$full_path = get_template_directory() . '/assets/images/' . ltrim( $image_path, '/' );
		$url = get_stylesheet_directory_uri() . '/assets/images/' . ltrim( $image_path, '/' );

		// Add cache-busting parameter based on file modification time
		if ( file_exists( $full_path ) ) {
			$file_time = filemtime( $full_path );
			$url = add_query_arg( 'v', $file_time, $url );
		}

		return $url;
	}

	/**
	 * Clear pattern cache to force pattern regeneration
	 *
	 * @since 1.0.0
	 */
	public static function clear_pattern_cache() {
		// Clear pattern-related transients
		delete_transient( 'wp_block_pattern_categories' );
		delete_transient( 'wp_block_patterns' );
		
		// Clear object cache for patterns
		if ( function_exists( 'wp_cache_delete' ) ) {
			wp_cache_delete( 'wp_block_pattern_categories', 'patterns' );
			wp_cache_delete( 'wp_block_patterns', 'patterns' );
		}
		
		// Clear WordPress object cache
		if ( function_exists( 'wp_cache_flush' ) ) {
			wp_cache_flush();
		}
	}
	}
}

// Define global functions
namespace {
	// Backward compatibility functions - must be available early for patterns
	if ( ! function_exists( 'klyra_get_image_url' ) ) {
		/**
		 * Get theme image URL with cache-busting
		 *
		 * @param string $image_path Relative path to image.
		 * @return string Image URL with version parameter.
		 */
		function klyra_get_image_url( $image_path ) {
			return \Klyra\Utilities\Helpers::get_image_url( $image_path );
		}
	}

	if ( ! function_exists( 'klyra_clear_pattern_cache' ) ) {
		/**
		 * Clear pattern cache
		 */
		function klyra_clear_pattern_cache() {
			\Klyra\Utilities\Helpers::clear_pattern_cache();
		}
	}
}

