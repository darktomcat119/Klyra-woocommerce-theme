<?php
/**
 * Title: Hero with Dark Video Background
 * Slug: klyra/dark-elegant/hero-dark-video
 * Categories: klyra-hero, klyra-dark-elegant
 * Description: An elegant dark hero section with video background, perfect for premium brands
 * Keywords: hero, video, dark, elegant, premium, sophisticated
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$dark_fallback = klyra_get_image_url( 'hero-centered-bg.jpg' );
?>

<!-- wp:cover {"dimRatio":50,"overlayColor":"foreground","minHeight":700,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"backgroundColor":"base"} -->
<div class="wp-block-cover alignfull has-base-background-color has-foreground-background-color has-background-dim" style="min-height:700px;padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $dark_fallback ); ?>" alt="" style="object-fit:cover;width:100%;height:100%;min-width:100%;min-height:100%;position:absolute;top:0;left:0;z-index:0" /></figure>
	<!-- /wp:image -->
	<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700","fontFamily":"var:preset|font-family|serif"}},"textColor":"background"} -->
			<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700;font-family:var(--wp--preset--font-family--serif)"><?php esc_html_e( 'Premium Elegance', 'klyra' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.8"},"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|large"}}},"textColor":"background"} -->
			<p class="has-text-align-center has-background-color has-text-color" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--large);font-size:var(--wp--preset--font-size--large);line-height:1.8"><?php esc_html_e( 'Sophisticated products crafted with uncompromising attention to detail', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"background","style":{"color":{"background":"var:preset|color|primary"},"border":{"radius":"4px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="#shop" style="border-radius:4px;background-color:var(--wp--preset--color--primary)"><?php esc_html_e( 'Explore Collection', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->

