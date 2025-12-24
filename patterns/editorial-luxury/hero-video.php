<?php
/**
 * Title: Hero with Video Background
 * Slug: klyra/editorial-luxury/hero-video
 * Categories: klyra-hero, klyra-editorial-luxury
 * Description: A cinematic hero section with video background, perfect for luxury and editorial brands
 * Keywords: hero, video, luxury, editorial, cinematic, premium
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_video_url = klyra_get_image_url( 'hero-video-bg.mp4' );
$hero_fallback_image = klyra_get_image_url( 'hero-video-fallback.jpg' );
?>

<!-- wp:cover {"dimRatio":40,"overlayColor":"foreground","minHeight":700,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}}} -->
<div class="wp-block-cover alignfull has-foreground-background-color has-background-dim" style="min-height:700px;padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:html -->
	<video class="wp-block-cover__image-background" autoplay loop muted playsinline style="object-fit:cover;width:100%;height:100%;min-width:100%;min-height:100%;position:absolute;top:0;left:0;z-index:0">
		<source src="<?php echo esc_url( $hero_video_url ); ?>" type="video/mp4">
		<img src="<?php echo esc_url( $hero_fallback_image ); ?>" alt="" style="object-fit:cover;width:100%;height:100%;min-width:100%;min-height:100%;position:absolute;top:0;left:0;z-index:0" />
	</video>
	<!-- /wp:html -->
	<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700","fontFamily":"var:preset|font-family|serif"}},"textColor":"background"} -->
			<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700;font-family:var(--wp--preset--font-family--serif)"><?php esc_html_e( 'Elegant Experience', 'klyra' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.8"}},"textColor":"background"} -->
			<p class="has-text-align-center has-background-color has-text-color" style="font-size:var(--wp--preset--font-size--large);line-height:1.8"><?php esc_html_e( 'Discover our premium collection crafted with elegance and sophistication', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--large)">
				<!-- wp:button {"textColor":"background","style":{"color":{"background":"var:preset|color|primary"},"border":{"radius":"4px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|xl","right":"var:preset|spacing|xl"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="#shop" style="border-radius:4px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--xl);background-color:var(--wp--preset--color--primary)"><?php esc_html_e( 'Explore Collection', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->

