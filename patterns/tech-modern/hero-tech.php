<?php
/**
 * Title: Tech-Inspired Hero
 * Slug: klyra/tech-modern/hero-tech
 * Categories: klyra-hero, klyra-tech-modern
 * Description: A modern tech-inspired hero section with contemporary design
 * Keywords: hero, tech, modern, contemporary, sleek
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$tech_image = klyra_get_image_url( 'hero-tech-bg.jpg' );
?>

<!-- wp:cover {"url":"<?php echo esc_url( $tech_image ); ?>","dimRatio":50,"overlayColor":"foreground","minHeight":650,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}}} -->
<div class="wp-block-cover alignfull has-foreground-background-color has-background-dim" style="min-height:650px;padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $tech_image ); ?>" data-object-fit="cover"/>
	<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700","letterSpacing":"-0.01em"}},"textColor":"background"} -->
			<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700;letter-spacing:-0.01em"><?php esc_html_e( 'Innovation Meets Design', 'klyra' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|large"}}},"textColor":"background"} -->
			<p class="has-text-align-center has-background-color has-text-color" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--large);font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'Cutting-edge technology products designed for the modern lifestyle', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"background","style":{"color":{"background":"var:preset|color|primary"},"border":{"radius":"6px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="#shop" style="border-radius:6px;background-color:var(--wp--preset--color--primary)"><?php esc_html_e( 'Explore Products', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->

