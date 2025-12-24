<?php
/**
 * Title: Featured Product Banner
 * Slug: klyra/product-featured
 * Categories: klyra-products
 * Description: A featured product banner showcasing a highlighted product
 * Keywords: product, featured, banner, showcase, highlight
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$featured_image = klyra_get_image_url( 'featured-product.jpg' );
?>

<!-- wp:cover {"url":"<?php echo esc_url( $featured_image ); ?>","dimRatio":40,"overlayColor":"foreground","minHeight":500,"minHeightUnit":"px","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-cover alignwide has-foreground-background-color has-background-dim" style="min-height:500px;padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $featured_image ); ?>" data-object-fit="cover"/>
	<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"50%","verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
				<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"textColor":"background"} -->
				<h2 class="wp-block-heading has-background-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--medium);font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( 'Featured Product', 'klyra' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large"},"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"background"} -->
				<p class="has-background-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--large);font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'Discover our most popular product, loved by thousands of customers worldwide.', 'klyra' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"textColor":"background","style":{"color":{"background":"var:preset|color|primary"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="#product" style="background-color:var(--wp--preset--color--primary)"><?php esc_html_e( 'View Product', 'klyra' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $featured_image ); ?>" alt="<?php esc_attr_e( 'Featured Product', 'klyra' ); ?>"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
</div>
<!-- /wp:cover -->

