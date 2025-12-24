<?php
/**
 * Performance Optimization
 *
 * Handles performance optimizations for the theme
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
 * Performance Optimization Class
 *
 * @since 1.0.0
 */
class Performance {

	/**
	 * Initialize performance optimizations
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		// Optimize asset loading
		add_action( 'wp_enqueue_scripts', array( $this, 'optimize_assets' ), 999 );
		
		// Lazy load images
		add_filter( 'wp_lazy_loading_enabled', '__return_true' );
		
		// Remove unnecessary features
		add_action( 'init', array( $this, 'remove_unnecessary_features' ) );
		
		// Optimize database queries
		add_action( 'pre_get_posts', array( $this, 'optimize_queries' ) );
	}

	/**
	 * Optimize asset loading
	 *
	 * @since 1.0.0
	 */
	public function optimize_assets() {
		// Defer non-critical CSS (handled by WordPress core)
		// Defer non-critical JavaScript
		if ( ! is_admin() && ! is_customize_preview() ) {
			add_filter( 'script_loader_tag', array( $this, 'defer_scripts' ), 10, 2 );
		}
	}

	/**
	 * Defer non-critical scripts
	 *
	 * @param string $tag Script tag
	 * @param string $handle Script handle
	 * @return string Modified script tag
	 * @since 1.0.0
	 */
	public function defer_scripts( $tag, $handle ) {
		// Don't defer critical scripts
		$critical_scripts = array(
			'wp-embed',
			'wp-emoji',
			'comment-reply',
		);
		
		if ( in_array( $handle, $critical_scripts, true ) ) {
			return $tag;
		}
		
		// Don't defer if already deferred or async
		if ( strpos( $tag, 'defer' ) !== false || strpos( $tag, 'async' ) !== false ) {
			return $tag;
		}
		
		// Defer non-critical scripts
		return str_replace( ' src', ' defer src', $tag );
	}

	/**
	 * Remove unnecessary features
	 *
	 * @since 1.0.0
	 */
	public function remove_unnecessary_features() {
		// Remove emoji scripts
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		
		// Remove unnecessary header links
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	}

	/**
	 * Optimize database queries
	 *
	 * @param WP_Query $query Query object
	 * @since 1.0.0
	 */
	public function optimize_queries( $query ) {
		if ( ! is_admin() && $query->is_main_query() ) {
			// Optimize post queries
			if ( is_home() || is_archive() ) {
				$query->set( 'no_found_rows', true );
				$query->set( 'update_post_meta_cache', false );
				$query->set( 'update_post_term_cache', false );
			}
		}
	}
}

