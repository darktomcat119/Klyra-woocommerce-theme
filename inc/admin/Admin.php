<?php
/**
 * Admin Customizations
 *
 * Handles WordPress admin area customizations
 *
 * @package Klyra
 * @since 1.0.0
 */

namespace Klyra\Admin;

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Admin Customizations Class
 *
 * @since 1.0.0
 */
class Admin {

	/**
	 * Initialize admin customizations
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'admin_init', array( $this, 'init' ) );
		add_action( 'admin_menu', array( $this, 'register_admin_pages' ) );
	}

	/**
	 * Admin initialization
	 *
	 * @since 1.0.0
	 */
	public function init() {
		// Admin customizations can be added here
	}

	/**
	 * Register Klyra admin pages under Appearance.
	 *
	 * This makes Klyra feel closer to "premium" themes by providing a central hub
	 * and direct shortcuts to common tasks.
	 *
	 * @since 1.0.0
	 */
	public function register_admin_pages() {
		add_theme_page(
			__( 'Klyra', 'klyra' ),
			__( 'Klyra', 'klyra' ),
			'edit_theme_options',
			'klyra-dashboard',
			array( $this, 'render_dashboard' )
		);

		add_theme_page(
			__( 'Klyra Starter Templates', 'klyra' ),
			__( 'Starter Templates', 'klyra' ),
			'edit_theme_options',
			'klyra-starter-templates',
			array( $this, 'render_starter_templates' )
		);

		add_theme_page(
			__( 'Klyra Style Variations', 'klyra' ),
			__( 'Style Variations', 'klyra' ),
			'edit_theme_options',
			'klyra-style-variations',
			array( $this, 'render_style_variations' )
		);
	}

	/**
	 * Render dashboard page.
	 *
	 * @since 1.0.0
	 */
	public function render_dashboard() {
		if ( ! current_user_can( 'edit_theme_options' ) ) {
			return;
		}

		$links = $this->get_quick_links();
		?>
		<div class="wrap">
			<h1><?php echo esc_html__( 'Klyra', 'klyra' ); ?></h1>
			<p><?php echo esc_html__( 'Quick access to the Site Editor, patterns, templates, and theme tools.', 'klyra' ); ?></p>

			<div class="klyra-cards" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:16px;max-width:1100px;">
				<?php foreach ( $links as $card ) : ?>
					<div class="klyra-card" style="background:#fff;border:1px solid #dcdcde;border-radius:12px;padding:16px;">
						<h2 style="margin:0 0 6px 0;font-size:16px;"><?php echo esc_html( $card['title'] ); ?></h2>
						<p style="margin:0 0 12px 0;color:#50575e;"><?php echo esc_html( $card['desc'] ); ?></p>
						<p style="margin:0;">
							<a class="button button-primary" href="<?php echo esc_url( $card['url'] ); ?>"><?php echo esc_html( $card['cta'] ); ?></a>
						</p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php
	}

	/**
	 * Render Starter Templates helper page.
	 *
	 * @since 1.0.0
	 */
	public function render_starter_templates() {
		if ( ! current_user_can( 'edit_theme_options' ) ) {
			return;
		}
		?>
		<div class="wrap">
			<h1><?php echo esc_html__( 'Klyra Starter Templates', 'klyra' ); ?></h1>
			<p><?php echo esc_html__( 'Open the Site Editor and insert “Klyra – Starter Templates” patterns into a page to import a ready-to-use layout.', 'klyra' ); ?></p>
			<p><a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php?path=/patterns' ) ); ?>"><?php echo esc_html__( 'Open Patterns', 'klyra' ); ?></a></p>
		</div>
		<?php
	}

	/**
	 * Render Style Variations helper page.
	 *
	 * @since 1.0.0
	 */
	public function render_style_variations() {
		if ( ! current_user_can( 'edit_theme_options' ) ) {
			return;
		}
		?>
		<div class="wrap">
			<h1><?php echo esc_html__( 'Klyra Style Variations', 'klyra' ); ?></h1>
			<p><?php echo esc_html__( 'Choose a style variation in the Site Editor to instantly change the theme’s look (colors, typography, spacing).', 'klyra' ); ?></p>
			<p><a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php echo esc_html__( 'Open Site Editor', 'klyra' ); ?></a></p>
		</div>
		<?php
	}

	/**
	 * Build quick links.
	 *
	 * @return array[]
	 * @since 1.0.0
	 */
	private function get_quick_links() {
		return array(
			array(
				'title' => __( 'Site Editor', 'klyra' ),
				'desc'  => __( 'Edit templates, template parts, and global styles (FSE).', 'klyra' ),
				'cta'   => __( 'Open Site Editor', 'klyra' ),
				'url'   => admin_url( 'site-editor.php' ),
			),
			array(
				'title' => __( 'Patterns', 'klyra' ),
				'desc'  => __( 'Insert ready-to-use sections, headers, footers, and pages.', 'klyra' ),
				'cta'   => __( 'Browse Patterns', 'klyra' ),
				'url'   => admin_url( 'site-editor.php?path=/patterns' ),
			),
			array(
				'title' => __( 'Template Parts', 'klyra' ),
				'desc'  => __( 'Switch headers/footers and edit reusable layout parts.', 'klyra' ),
				'cta'   => __( 'Edit Template Parts', 'klyra' ),
				'url'   => admin_url( 'site-editor.php?path=/wp_template_part/all' ),
			),
			array(
				'title' => __( 'Navigation (Menus)', 'klyra' ),
				'desc'  => __( 'Manage menus using the block Navigation editor.', 'klyra' ),
				'cta'   => __( 'Edit Navigation', 'klyra' ),
				'url'   => admin_url( 'site-editor.php?path=/navigation' ),
			),
			array(
				'title' => __( 'Widgets (Legacy)', 'klyra' ),
				'desc'  => __( 'Legacy widgets screen (if your site uses widgets).', 'klyra' ),
				'cta'   => __( 'Open Widgets', 'klyra' ),
				'url'   => admin_url( 'widgets.php' ),
			),
			array(
				'title' => __( 'Theme License', 'klyra' ),
				'desc'  => __( 'Activate your license for updates and premium features.', 'klyra' ),
				'cta'   => __( 'Manage License', 'klyra' ),
				'url'   => admin_url( 'themes.php?page=klyra-license' ),
			),
		);
	}
}

