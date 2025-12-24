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

		// Register style-specific patterns
		$this->register_style_patterns();

		// #region agent log
		$this->maybe_log_registry_snapshot();
		// #endregion
	}

	// #region agent log
	/**
	 * Debug-only: log what patterns WordPress thinks are registered.
	 *
	 * This is runtime evidence for cases where patterns "exist on disk" but don't appear in the editor.
	 */
	private function maybe_log_registry_snapshot() {
		if ( is_admin() ) {
			// Allow running in Site Editor/admin too.
		}

		if ( ! is_user_logged_in() || ! current_user_can( 'manage_options' ) ) {
			return;
		}

		if ( ! isset( $_GET['klyra_patterns_debug'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			return;
		}

		if ( ! class_exists( 'WP_Block_Patterns_Registry' ) ) {
			$this->append_debug_log(
				array(
					'sessionId'    => 'debug-session',
					'runId'        => 'patterns-debug',
					'hypothesisId' => 'P0',
					'location'     => 'inc/core/Patterns.php',
					'message'      => 'WP_Block_Patterns_Registry missing',
					'data'         => array(),
					'timestamp'    => round( microtime( true ) * 1000 ),
				)
			);
			return;
		}

		$registry = \WP_Block_Patterns_Registry::get_instance();
		$all      = method_exists( $registry, 'get_all_registered' ) ? $registry->get_all_registered() : array();

		// Narrow to our namespace to keep logs small.
		$klyra = array();
		foreach ( $all as $slug => $pattern ) {
			if ( strpos( $slug, 'klyra/' ) !== 0 ) {
				continue;
			}
			$klyra[ $slug ] = array(
				'title'      => isset( $pattern['title'] ) ? $pattern['title'] : '',
				'categories' => isset( $pattern['categories'] ) ? $pattern['categories'] : array(),
				'inserter'   => isset( $pattern['inserter'] ) ? $pattern['inserter'] : true,
			);
			if ( count( $klyra ) >= 60 ) {
				break;
			}
		}

		$this->append_debug_log(
			array(
				'sessionId'    => 'debug-session',
				'runId'        => 'patterns-debug',
				'hypothesisId' => 'P1',
				'location'     => 'inc/core/Patterns.php',
				'message'      => 'Pattern registry snapshot',
				'data'         => array(
					'patternsDir'        => $this->patterns_dir,
					'totalRegistered'    => is_array( $all ) ? count( $all ) : 0,
					'klyraRegistered'    => count( $klyra ),
					'klyraSampleSlugs'   => array_slice( array_keys( $klyra ), 0, 30 ),
					'klyraSampleDetails' => $klyra,
				),
				'timestamp'    => round( microtime( true ) * 1000 ),
			)
		);
	}

	/**
	 * Append one NDJSON line to the debug log.
	 *
	 * @param array $payload Payload.
	 */
	private function append_debug_log( $payload ) {
		@file_put_contents( 'c:\\xampp\\htdocs\\wwoocommerce\\.cursor\\debug.log', wp_json_encode( $payload ) . "\n", FILE_APPEND ); // phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged,WordPress.WP.AlternativeFunctions.file_system_read_file_put_contents
	}
	// #endregion

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

		// Normalize slug: remove /shared/ from slug to match template references
		$pattern_slug = $headers['slug'];
		$pattern_slug = str_replace( '/shared/', '/', $pattern_slug );

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

		// Use normalized slug
		$pattern_data['slug'] = $pattern_slug;

		return $pattern_data;
	}

	/**
	 * Register style-specific patterns
	 *
	 * @since 1.0.0
	 */
	private function register_style_patterns() {
		$active_style = \Klyra\Editor\StyleDetection::get_active_style();
		
		// Style-specific directories
		$style_dirs = array(
			'soft-minimal',
			'editorial-luxury',
			'bold-brand',
			'tech-modern',
			'glass-light',
			'dark-elegant',
		);
		
		// Register patterns for active style
		foreach ( $style_dirs as $style_dir ) {
			$style_path = $this->patterns_dir . '/' . $style_dir;
			
			if ( is_dir( $style_path ) ) {
				$pattern_files = glob( $style_path . '/*.php' );
				
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
		}
	}
}

