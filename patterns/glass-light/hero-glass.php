<?php
/**
 * Title: Hero with Glassmorphism
 * Slug: klyra/glass-light/hero-glass
 * Categories: klyra-hero, klyra-glass-light
 * Description: A modern hero section with glassmorphism effects, perfect for trendy brands
 * Keywords: hero, glassmorphism, modern, trendy, light, airy
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$glass_image = klyra_get_image_url( 'hero-glass-bg.jpg' );
?>

<!-- wp:cover {"url":"<?php echo esc_url( $glass_image ); ?>","dimRatio":30,"overlayColor":"foreground","minHeight":600,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}}} -->
<div class="wp-block-cover alignfull has-foreground-background-color has-background-dim" style="min-height:600px;padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $glass_image ); ?>" data-object-fit="cover"/>
	<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"},"style":{"border":{"radius":"16px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}},"background":{"backgroundImage":{"url":"data:image/svg+xml,%3Csvg width='100' height='100' xmlns='http://www.w3.org/2000/svg'%3E%3Cdefs%3E%3Cfilter id='blur'%3E%3CfeGaussianBlur stdDeviation='10'/%3E%3C/filter%3E%3C/defs%3E%3Crect width='100' height='100' fill='rgba(255,255,255,0.1)' filter='url(%23blur)'/%3E%3C/svg%3E"}}}} -->
		<div class="wp-block-group" style="border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}},"textColor":"background"} -->
			<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( 'Light & Modern', 'klyra' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|large"}}},"textColor":"background"} -->
			<p class="has-text-align-center has-background-color has-text-color" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--large);font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'Experience products designed with modern aesthetics and light, airy elegance', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"background","style":{"color":{"background":"var:preset|color|primary"},"border":{"radius":"8px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="#shop" style="border-radius:8px;background-color:var(--wp--preset--color--primary)"><?php esc_html_e( 'Discover More', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->

