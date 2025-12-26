<?php
/**
 * Title: Header (Modern)
 * Slug: klyra/header-modern
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport Width: 1400
 * Description: Modern header with announcement bar, navigation, search, and WooCommerce icons.
 * Keywords: header, navigation, shop, cart, search
 *
 * @package Klyra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"full","backgroundColor":"surface","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:10px;padding-bottom:10px">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|small"}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Free shipping on orders over $75 • Easy returns • Secure checkout', 'klyra' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"14px","bottom":"14px"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:14px;padding-bottom:14px">
	<!-- wp:columns {"align":"wide","isStackedOnMobile":true} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"style":{"spacing":{"blockGap":"12px"}}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":48,"shouldSyncIcon":true} /-->
				<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"700"}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"style":{"spacing":{"blockGap":"12px"}}} -->
			<div class="wp-block-group">
				<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'klyra' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search products…', 'klyra' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'klyra' ); ?>","buttonUseIcon":true,"width":260,"widthUnit":"px"} /-->
				<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only"} /-->
				<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->


