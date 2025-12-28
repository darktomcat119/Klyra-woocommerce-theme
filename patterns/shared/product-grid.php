<?php
/**
 * Title: Product Grid
 * Slug: klyra/product-grid
 * Categories: klyra-products, woocommerce
 * Description: A responsive product grid - displays recent products (works even without featured products)
 * Keywords: products, grid, woocommerce, shop
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!--
	  Use [products] shortcode instead of [featured_products] to show products
	  even if none are marked as "featured" in WooCommerce.
	  Change to [featured_products] if you want featured-only.
	-->
	<!-- wp:shortcode -->
	[products limit="8" columns="4" orderby="date" order="DESC"]
	<!-- /wp:shortcode -->
</div>
<!-- /wp:group -->

