<?php
/**
 * Title: Hero with Animated Background
 * Slug: klyra/bold-brand/hero-animated
 * Categories: klyra-hero, klyra-bold-brand
 * Description: A high-energy hero section with animated background, perfect for bold brands
 * Keywords: hero, animated, bold, brand, dynamic, high energy
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_image_url = klyra_get_image_url( 'hero-animated-bg.jpg' );
?>

<!-- wp:cover {"url":"<?php echo esc_url( $hero_image_url ); ?>","dimRatio":30,"overlayColor":"foreground","minHeight":650,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}}} -->
<div class="wp-block-cover alignfull has-foreground-background-color has-background-dim" style="min-height:650px;padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $hero_image_url ); ?>" data-object-fit="cover"/>
	<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"800","letterSpacing":"-0.02em"}},"textColor":"background"} -->
			<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:800;letter-spacing:-0.02em"><?php esc_html_e( 'Bold. Dynamic. Unstoppable.', 'klyra' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|xl","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"textColor":"background"} -->
			<p class="has-text-align-center has-background-color has-text-color" style="margin-top:var(--wp--preset--spacing--large);font-size:var(--wp--preset--font-size--xl);font-weight:600"><?php esc_html_e( 'Experience products that match your energy', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|xl"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--xl)">
				<!-- wp:button {"textColor":"background","style":{"color":{"background":"var:preset|color|accent"},"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|xxl","right":"var:preset|spacing|xxl"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="#shop" style="border-radius:6px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--xxl);background-color:var(--wp--preset--color--accent)"><?php esc_html_e( 'Shop Now', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->

