<?php
/**
 * Pattern Registration
 *
 * Handles block pattern registration and management
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
 * Pattern Registration Class
 *
 * @since 1.0.0
 */
class Patterns {

	/**
	 * Patterns directory
	 *
	 * @var string
	 */
	private $patterns_dir;

	/**
	 * Initialize pattern registration
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->patterns_dir = get_template_directory() . '/patterns';
		add_action( 'init', array( $this, 'register_patterns' ) );
	}

	/**
	 * Register all patterns
	 *
	 * @since 1.0.0
	 */
	public function register_patterns() {
		// Register shared patterns
		$this->register_shared_patterns();

		// Register style-specific patterns (future)
		// $this->register_style_patterns();
	}

	/**
	 * Register shared patterns
	 *
	 * @since 1.0.0
	 */
	private function register_shared_patterns() {
		// Check shared directory first (preferred location)
		$shared_dir = $this->patterns_dir . '/shared';
		$pattern_files = array();

		if ( is_dir( $shared_dir ) ) {
			$pattern_files = glob( $shared_dir . '/*.php' );
		}

		// Fallback to root patterns directory (for backward compatibility)
		if ( empty( $pattern_files ) ) {
			$pattern_files = glob( $this->patterns_dir . '/*.php' );
		}

		if ( empty( $pattern_files ) ) {
			return;
		}

		foreach ( $pattern_files as $pattern_file ) {
			$pattern_data = $this->get_pattern_data( $pattern_file );
			
			if ( $pattern_data ) {
				register_block_pattern(
					$pattern_data['slug'],
					$pattern_data
				);
			}
		}
	}

	/**
	 * Get pattern data from file
	 *
	 * @param string $file Pattern file path
	 * @return array|false Pattern data or false on failure
	 * @since 1.0.0
	 */
	private function get_pattern_data( $file ) {
		if ( ! file_exists( $file ) ) {
			return false;
		}

		// Get pattern headers
		$headers = get_file_data(
			$file,
			array(
				'title'       => 'Title',
				'slug'        => 'Slug',
				'description' => 'Description',
				'categories'  => 'Categories',
				'keywords'    => 'Keywords',
			)
		);

		if ( empty( $headers['title'] ) || empty( $headers['slug'] ) ) {
			return false;
		}

		// Get pattern content
		ob_start();
		include $file;
		$content = ob_get_clean();

		// Build pattern data
		$pattern_data = array(
			'title'       => $headers['title'],
			'description' => ! empty( $headers['description'] ) ? $headers['description'] : '',
			'content'    => $content,
		);

		// Add categories
		if ( ! empty( $headers['categories'] ) ) {
			$categories = array_map( 'trim', explode( ',', $headers['categories'] ) );
			$pattern_data['categories'] = $categories;
		}

		// Add keywords
		if ( ! empty( $headers['keywords'] ) ) {
			$keywords = array_map( 'trim', explode( ',', $headers['keywords'] ) );
			$pattern_data['keywords'] = $keywords;
		}

		// Ensure slug is set
		$pattern_data['slug'] = $headers['slug'];

		return $pattern_data;
	}
}

