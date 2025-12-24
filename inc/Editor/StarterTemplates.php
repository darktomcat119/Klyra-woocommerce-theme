<?php
/**
 * Starter Templates
 *
 * Handles starter template registration and management
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
 * Starter Templates Class
 *
 * @since 1.0.0
 */
class StarterTemplates {

	/**
	 * Starter templates directory
	 *
	 * @var string
	 */
	private $templates_dir;

	/**
	 * Initialize starter templates
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->templates_dir = get_template_directory() . '/starter-templates';
		
		// Register starter templates as block patterns (for easy import)
		add_action( 'init', array( $this, 'register_starter_templates' ) );
	}

	/**
	 * Register starter templates
	 *
	 * @since 1.0.0
	 */
	public function register_starter_templates() {
		if ( ! is_dir( $this->templates_dir ) ) {
			return;
		}

		$template_files = glob( $this->templates_dir . '/*.html' );

		if ( empty( $template_files ) ) {
			return;
		}

		foreach ( $template_files as $template_file ) {
			$template_name = basename( $template_file, '.html' );
			$template_slug = 'klyra/starter/' . sanitize_key( $template_name );
			
			// Get template content
			$template_content = file_get_contents( $template_file );
			
			if ( empty( $template_content ) ) {
				continue;
			}

			// Register as block pattern for easy import
			register_block_pattern(
				$template_slug,
				array(
					'title'       => $this->get_template_title( $template_name ),
					'description' => $this->get_template_description( $template_name ),
					'content'     => $template_content,
					'categories'  => array( 'klyra-starter-templates' ),
					'keywords'    => $this->get_template_keywords( $template_name ),
				)
			);
		}
	}

	/**
	 * Get template title
	 *
	 * @param string $template_name Template file name
	 * @return string Template title
	 * @since 1.0.0
	 */
	private function get_template_title( $template_name ) {
		$titles = array(
			'fashion-store-homepage' => __( 'Fashion Store Homepage', 'klyra' ),
			'electronics-store-homepage' => __( 'Electronics Store Homepage', 'klyra' ),
			'bold-brand-homepage' => __( 'Bold Brand Homepage', 'klyra' ),
			'business-homepage' => __( 'Business Homepage', 'klyra' ),
			'landing-page' => __( 'Landing Page', 'klyra' ),
			'magazine-blog' => __( 'Magazine Blog', 'klyra' ),
			'portfolio-creative' => __( 'Creative Portfolio', 'klyra' ),
			'product-launch' => __( 'Product Launch Page', 'klyra' ),
			'service-business' => __( 'Service Business', 'klyra' ),
			'agency-homepage' => __( 'Agency Homepage', 'klyra' ),
			'coming-soon' => __( 'Coming Soon Page', 'klyra' ),
			'event-page' => __( 'Event Page', 'klyra' ),
			'app-landing' => __( 'App Landing Page', 'klyra' ),
			'personal-blog' => __( 'Personal Blog', 'klyra' ),
			'portfolio-professional' => __( 'Professional Portfolio', 'klyra' ),
		);

		return isset( $titles[ $template_name ] ) ? $titles[ $template_name ] : ucwords( str_replace( '-', ' ', $template_name ) );
	}

	/**
	 * Get template description
	 *
	 * @param string $template_name Template file name
	 * @return string Template description
	 * @since 1.0.0
	 */
	private function get_template_description( $template_name ) {
		$descriptions = array(
			'fashion-store-homepage' => __( 'A complete homepage template perfect for fashion and apparel stores', 'klyra' ),
			'electronics-store-homepage' => __( 'A modern homepage template designed for electronics and tech stores', 'klyra' ),
			'bold-brand-homepage' => __( 'A high-energy homepage template for bold, dynamic brands', 'klyra' ),
			'business-homepage' => __( 'A professional homepage template for business and service websites', 'klyra' ),
			'landing-page' => __( 'A conversion-focused landing page template with pricing and features', 'klyra' ),
			'magazine-blog' => __( 'A magazine-style blog template with sidebar and post grid', 'klyra' ),
			'portfolio-creative' => __( 'A creative portfolio template showcasing work and team', 'klyra' ),
			'product-launch' => __( 'A product launch page template with featured product and social proof', 'klyra' ),
			'service-business' => __( 'A service business template with services, stats, and contact form', 'klyra' ),
			'agency-homepage' => __( 'An agency homepage template showcasing services, team, and clients', 'klyra' ),
			'coming-soon' => __( 'A coming soon page template with email signup and social links', 'klyra' ),
			'event-page' => __( 'An event page template with details, registration, and speakers', 'klyra' ),
			'app-landing' => __( 'An app landing page template with features, pricing, and testimonials', 'klyra' ),
			'personal-blog' => __( 'A personal blog template with post list and newsletter signup', 'klyra' ),
			'portfolio-professional' => __( 'A professional portfolio template with gallery and team section', 'klyra' ),
		);

		return isset( $descriptions[ $template_name ] ) ? $descriptions[ $template_name ] : __( 'A complete page template ready to use', 'klyra' );
	}

	/**
	 * Get template keywords
	 *
	 * @param string $template_name Template file name
	 * @return array Template keywords
	 * @since 1.0.0
	 */
	private function get_template_keywords( $template_name ) {
		$keywords_map = array(
			'fashion-store-homepage' => array( 'fashion', 'apparel', 'store', 'homepage', 'ecommerce' ),
			'electronics-store-homepage' => array( 'electronics', 'tech', 'store', 'homepage', 'ecommerce' ),
			'bold-brand-homepage' => array( 'bold', 'brand', 'dynamic', 'homepage', 'ecommerce' ),
			'business-homepage' => array( 'business', 'corporate', 'services', 'homepage' ),
			'landing-page' => array( 'landing', 'page', 'conversion', 'pricing', 'features' ),
			'magazine-blog' => array( 'blog', 'magazine', 'posts', 'articles', 'news' ),
			'portfolio-creative' => array( 'portfolio', 'creative', 'gallery', 'work', 'showcase' ),
			'product-launch' => array( 'product', 'launch', 'featured', 'new', 'release' ),
			'service-business' => array( 'service', 'business', 'services', 'contact', 'professional' ),
			'agency-homepage' => array( 'agency', 'creative', 'services', 'team', 'clients' ),
			'coming-soon' => array( 'coming', 'soon', 'launch', 'email', 'signup' ),
			'event-page' => array( 'event', 'conference', 'registration', 'schedule', 'speakers' ),
			'app-landing' => array( 'app', 'mobile', 'application', 'download', 'features' ),
			'personal-blog' => array( 'blog', 'personal', 'posts', 'articles', 'diary' ),
			'portfolio-professional' => array( 'portfolio', 'professional', 'gallery', 'work', 'showcase' ),
		);

		return isset( $keywords_map[ $template_name ] ) ? $keywords_map[ $template_name ] : array( 'template', 'starter' );
	}
}

