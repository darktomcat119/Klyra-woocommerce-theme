<?php
/**
 * Register block scripts and styles.
 *
 * @package CreateBlockPlugin
 */

namespace CreateBlockPlugin;

/**
 * Register block patterns.
 *
 * @since 1.0.0
 */
class RegisterBlockPatterns {

	/**
	 * Register class with appropriate WordPress hooks
	 */
	public static function register() {
		$instance = new self();
		add_action( 'init', array( $instance, 'register_patterns' ) );
	}

	/**
	 * Register block pattern.
	 *
	 * @return void
	 */
	public function register_patterns() {

		if ( function_exists( 'register_block_pattern' ) ) {

			/**
			* Register block pattern category
			*/
			register_block_pattern_category(
				KLYRA_PLUGIN_SLUG,
				array(
					'label' => __( 'Klyra', 'create-block-plugin' ),
				)
			);

			/**
			* Register block patterns
			* Tool to escape strings: https://onlinestringtools.com/escape-string
			*/
			// Add our patterns.
			foreach ( $this->get_patterns() as $name => $pattern ) {
				register_block_pattern( $name, $pattern );
			}
		}
	}

	/**
	 * Register get block patterns from block-pattern directory.
	 *
	 * @return array
	 */
	public function get_patterns() {

		$patterns = array();

		// Get all php pattern files.
		foreach ( glob( KLYRA_PLUGIN_PATH . 'includes/block-patterns/*.php' ) as $pattern_file ) {
			$pattern_name              = KLYRA_PLUGIN_SLUG . basename( $pattern_file );
			$patterns[ $pattern_name ] = require_once $pattern_file;
		};

		// Get all json pattern files.
		foreach ( glob( KLYRA_PLUGIN_PATH . 'includes/block-patterns/*.json' ) as $pattern_file ) {
			$pattern_name              = KLYRA_PLUGIN_SLUG . basename( $pattern_file );
			$patterns[ $pattern_name ] = json_decode(
				// phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
				file_get_contents( $pattern_file ),
				true
			);
		};

		return $patterns;
	}
}
