<?php
/**
 * Theme Loader
 *
 * Boots all theme components (namespaced classes).
 *
 * @package Klyra
 * @since 1.0.0
 */

namespace Klyra;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Simple bootstrap loader (no Composer required).
 *
 * @since 1.0.0
 */
final class Loader {
	/**
	 * @var string
	 */
	private $base_dir;

	/**
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->base_dir = defined( 'KLYRA_DIR' ) ? KLYRA_DIR : get_template_directory();

		$this->require_files();
		$this->boot();
	}

	/**
	 * Require all theme class files.
	 *
	 * @since 1.0.0
	 */
	private function require_files() {
		$files = array(
			$this->base_dir . '/inc/core/ThemeSetup.php',
			$this->base_dir . '/inc/core/Assets.php',
			$this->base_dir . '/inc/core/Patterns.php',
			$this->base_dir . '/inc/core/Performance.php',
			$this->base_dir . '/inc/Editor/Customizer.php',
			$this->base_dir . '/inc/Editor/StyleDetection.php',
			$this->base_dir . '/inc/Editor/StarterTemplates.php',
			$this->base_dir . '/inc/WooCommerce/WooCommerce.php',
			$this->base_dir . '/inc/WooCommerce/Enhancements.php',
			$this->base_dir . '/inc/admin/Admin.php',
			$this->base_dir . '/inc/integrations/License/LicenseManager.php',
			$this->base_dir . '/inc/integrations/License/License.php',
		);

		foreach ( $files as $file ) {
			if ( file_exists( $file ) ) {
				require_once $file;
			}
		}
	}

	/**
	 * Instantiate components.
	 *
	 * @since 1.0.0
	 */
	private function boot() {
		new \Klyra\Core\ThemeSetup();
		new \Klyra\Core\Assets();
		new \Klyra\Core\Patterns();
		new \Klyra\Core\Performance();

		new \Klyra\Editor\Customizer();
		new \Klyra\Editor\StyleDetection();
		new \Klyra\Editor\StarterTemplates();

		new \Klyra\WooCommerce\WooCommerce();
		new \Klyra\WooCommerce\Enhancements();

		new \Klyra\Admin\Admin();
		new \Klyra\Integrations\License\License();
	}
}

new Loader();


