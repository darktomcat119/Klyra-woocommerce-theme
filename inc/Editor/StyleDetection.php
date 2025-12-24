<?php
/**
 * Style Detection
 *
 * Handles style variation detection and pattern filtering
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
 * Style Detection Class
 *
 * @since 1.0.0
 */
class StyleDetection {

	/**
	 * Initialize style detection
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'block_pattern_categories', array( $this, 'add_style_categories' ) );
	}

	/**
	 * Get active style variation
	 *
	 * @return string Active style variation slug
	 * @since 1.0.0
	 */
	public static function get_active_style() {
		// Get active style from theme mods
		$active_style = get_theme_mod( 'active_style_variation', 'soft-minimal' );
		
		// Validate style exists
		$valid_styles = array(
			'soft-minimal',
			'editorial-luxury',
			'bold-brand',
			'tech-modern',
			'glass-light',
			'dark-elegant',
			'minimalist',
			'vibrant',
			'professional',
			'creative',
		);
		
		if ( ! in_array( $active_style, $valid_styles, true ) ) {
			return 'soft-minimal';
		}
		
		return $active_style;
	}

	/**
	 * Check if pattern matches active style
	 *
	 * @param string $pattern_slug Pattern slug
	 * @return bool True if pattern matches active style
	 * @since 1.0.0
	 */
	public static function pattern_matches_style( $pattern_slug ) {
		$active_style = self::get_active_style();
		
		// Shared patterns always match
		if ( strpos( $pattern_slug, '/shared/' ) !== false ) {
			return true;
		}
		
		// Check if pattern belongs to active style
		return strpos( $pattern_slug, $active_style ) !== false;
	}

	/**
	 * Add style-specific pattern categories
	 *
	 * @param array $categories Existing categories
	 * @return array Modified categories
	 * @since 1.0.0
	 */
	public function add_style_categories( $categories ) {
		$active_style = self::get_active_style();
		
		// Add style-specific category
		$style_label = ucwords( str_replace( '-', ' ', $active_style ) );
		
		$categories[] = array(
			'name'  => 'klyra-' . $active_style,
			'label' => sprintf( __( 'Klyra - %s', 'klyra' ), $style_label ),
		);
		
		return $categories;
	}
}

