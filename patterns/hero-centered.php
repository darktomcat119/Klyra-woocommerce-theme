<?php
/**
 * Title: Hero Centered
 * Slug: klyra/hero-centered
 * Categories: klyra-hero
 * Description: A full-width centered hero section with title, description, and call-to-action button
 * Keywords: hero, banner, cta, call to action, centered
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_image_url = get_stylesheet_directory_uri() . '/assets/images/hero-centered-bg.jpg';
?>

<!-- wp:cover {"url":"<?php echo esc_url( $hero_image_url ); ?>","dimRatio":50,"overlayColor":"foreground","minHeight":600,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}}} -->
<div class="wp-block-cover alignfull has-foreground-background-color has-background-dim" style="min-height:600px;padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Hero Background', 'klyra' ); ?>" src="<?php echo esc_url( $hero_image_url ); ?>" data-object-fit="cover"/>
	<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-50 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}},"textColor":"background"} -->
			<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( 'Welcome to Our Store', 'klyra' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|large"}},"textColor":"background"} -->
			<p class="has-text-align-center has-background-color has-text-color" style="font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'Discover amazing products crafted with care and quality', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"foreground","style":{"color":{"background":"var:preset|color|background"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-text-color has-background-color has-background wp-element-button" href="#shop"><?php esc_html_e( 'Shop Now', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->

