<?php
/**
 * Title: Hero with Carousel
 * Slug: klyra/editorial-luxury/hero-carousel
 * Categories: klyra-hero, klyra-editorial-luxury
 * Description: An elegant hero section with product carousel, perfect for luxury brands
 * Keywords: hero, carousel, luxury, editorial, products, showcase
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700","fontFamily":"var:preset|font-family|serif"},"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
			<h1 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--large);font-size:var(--wp--preset--font-size--gigantic);font-weight:700;font-family:var(--wp--preset--font-family--serif)"><?php esc_html_e( 'Elegant Collection', 'klyra' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.8"},"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
			<p style="margin-bottom:var(--wp--preset--spacing--large);font-size:var(--wp--preset--font-size--large);line-height:1.8"><?php esc_html_e( 'Discover our curated selection of premium products, each piece carefully crafted to perfection.', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
				<!-- wp:button {"textColor":"background","style":{"color":{"background":"var:preset|color|primary"},"border":{"radius":"4px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="#shop" style="border-radius:4px;background-color:var(--wp--preset--color--primary)"><?php esc_html_e( 'Explore Collection', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
			<div class="wp-block-group">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'hero-split-image.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Featured Product', 'klyra' ); ?>" style="border-radius:8px"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
				<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'hero-centered-bg.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Featured Product', 'klyra' ); ?>" style="border-radius:8px"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

