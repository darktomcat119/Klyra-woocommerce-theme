<?php
/**
 * Title: Product Grid
 * Slug: klyra/product-grid
 * Categories: klyra-products, woocommerce
 * Description: A responsive product grid showcasing featured products
 * Keywords: products, grid, woocommerce, shop, featured
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
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var:preset|font-size|huge"}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--huge)"><?php esc_html_e( 'Featured Products', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:woocommerce/product-grid {"columns":4,"rows":2,"contentVisibility":{"title":true,"price":true,"rating":true,"button":true}} /-->
</div>
<!-- /wp:group -->

