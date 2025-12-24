<?php
/**
 * Title: Editorial Product Showcase
 * Slug: klyra/editorial-luxury/product-showcase
 * Categories: klyra-products, klyra-editorial-luxury
 * Description: An elegant product showcase section with magazine-style layout
 * Keywords: products, showcase, luxury, editorial, magazine, elegant
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700","fontFamily":"var:preset|font-family|serif"},"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--large);font-size:var(--wp--preset--font-size--gigantic);font-weight:700;font-family:var(--wp--preset--font-family--serif)"><?php esc_html_e( 'Curated Collection', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.8"},"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xl);font-size:var(--wp--preset--font-size--large);line-height:1.8"><?php esc_html_e( 'Each piece carefully selected for its quality, craftsmanship, and timeless elegance', 'klyra' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'product-showcase-1.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Featured Product', 'klyra' ); ?>" style="border-radius:8px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Product Name', 'klyra' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Elegant description of the product', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'product-showcase-2.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Featured Product', 'klyra' ); ?>" style="border-radius:8px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Product Name', 'klyra' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Elegant description of the product', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'product-showcase-3.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Featured Product', 'klyra' ); ?>" style="border-radius:8px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Product Name', 'klyra' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Elegant description of the product', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

