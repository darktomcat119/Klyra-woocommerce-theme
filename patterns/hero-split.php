<?php
/**
 * Title: Hero Split
 * Slug: klyra/hero-split
 * Categories: klyra-hero
 * Description: A split layout hero section with content on one side and image on the other
 * Keywords: hero, split, layout, image, content
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_split_image_url = get_stylesheet_directory_uri() . '/assets/images/hero-split-image.jpg';
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}}} -->
			<h1 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( 'Premium Quality Products', 'klyra' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large"}}} -->
			<p style="font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'Experience the difference with our carefully curated selection of premium products designed to elevate your lifestyle.', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#shop"><?php esc_html_e( 'Explore Collection', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:cover {"url":"<?php echo esc_url( $hero_split_image_url ); ?>","dimRatio":0,"minHeight":500,"minHeightUnit":"px","isUserOverlayColor":true} -->
			<div class="wp-block-cover" style="min-height:500px;height:100%;">
				<img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Hero Image', 'klyra' ); ?>" src="<?php echo esc_url( $hero_split_image_url ); ?>" data-object-fit="cover" style="object-fit:cover;object-position:center;width:100%;height:100%;min-width:100%;min-height:100%;"/>
				<div class="wp-block-cover__inner-container">
					<!-- wp:spacer {"height":"0px"} -->
					<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

