<?php
/**
 * Theme Setup
 *
 * Handles core theme setup and configuration
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
 * Theme Setup Class
 *
 * @since 1.0.0
 */
class ThemeSetup {

	/**
	 * Initialize theme setup
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
		add_action( 'init', array( $this, 'register_pattern_categories' ) );
	}

	/**
	 * Theme setup
	 *
	 * @since 1.0.0
	 */
	public function setup() {
		// Make theme available for translation
		load_theme_textdomain( 'klyra', get_template_directory() . '/languages' );

		// Add support for editor styles
		add_theme_support( 'editor-styles' );

		// Add support for post thumbnails
		add_theme_support( 'post-thumbnails' );

		// Add support for responsive embedded content
		add_theme_support( 'responsive-embeds' );

		// Add support for block styles
		add_theme_support( 'wp-block-styles' );

		// Add support for wide and full alignments
		add_theme_support( 'align-wide' );

		// Add support for custom logo
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 400,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add support for HTML5
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add support for title tag
		add_theme_support( 'title-tag' );

		// Add support for automatic feed links
		add_theme_support( 'automatic-feed-links' );
	}

	/**
	 * Register pattern categories
	 *
	 * @since 1.0.0
	 */
	public function register_pattern_categories() {
		register_block_pattern_category(
			'klyra-hero',
			array(
				'label' => __( 'Klyra - Hero Sections', 'klyra' ),
			)
		);

		register_block_pattern_category(
			'klyra-products',
			array(
				'label' => __( 'Klyra - Products', 'klyra' ),
			)
		);

		register_block_pattern_category(
			'klyra-content',
			array(
				'label' => __( 'Klyra - Content', 'klyra' ),
			)
		);

		register_block_pattern_category(
			'klyra-cta',
			array(
				'label' => __( 'Klyra - Call to Action', 'klyra' ),
			)
		);

		register_block_pattern_category(
			'klyra-starter-templates',
			array(
				'label' => __( 'Klyra - Starter Templates', 'klyra' ),
			)
		);
	}
}

