<?php
/**
 * Title: Dynamic Product Grid
 * Slug: klyra/bold-brand/product-dynamic
 * Categories: klyra-products, klyra-bold-brand
 * Description: A high-energy product grid with dynamic layout for bold brands
 * Keywords: products, grid, bold, brand, dynamic, high energy
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"800","letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--large);font-size:var(--wp--preset--font-size--gigantic);font-weight:800;letter-spacing:-0.02em"><?php esc_html_e( 'Shop the Collection', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}}} -->
	<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--xl);font-size:var(--wp--preset--font-size--large);font-weight:600"><?php esc_html_e( 'High-energy products that match your bold lifestyle', 'klyra' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:pattern {"slug":"klyra/shared/product-grid"} /-->
</div>
<!-- /wp:group -->

