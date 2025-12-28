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

<!-- wp:group {"align":"full","backgroundColor":"surface","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"}}}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--xs)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"10px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Free shipping over $75 • Easy returns', 'klyra' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"},"style":{"spacing":{"blockGap":"12px"}}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Secure checkout', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"8px"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"fontSize":"small"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="#"><?php esc_html_e( 'Shop New', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"border":{"bottom":{"color":"var:preset|color|tertiary","width":"1px"}}}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"16px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"12px"}}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":52,"shouldSyncIcon":true} /-->
			<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"2px"}}} -->
			<div class="wp-block-group">
				<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"700"}}} /-->
				<!-- wp:site-tagline {"style":{"typography":{"fontSize":"var:preset|font-size|small"}},"textColor":"muted"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"},"overlayMenu":"mobile","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} /-->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"},"style":{"spacing":{"blockGap":"12px"}}} -->
		<div class="wp-block-group">
			<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'klyra' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search products…', 'klyra' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'klyra' ); ?>","buttonUseIcon":true,"width":320,"widthUnit":"px"} /-->
			<?php if ( class_exists( 'WooCommerce' ) ) : ?>
			<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only"} /-->
			<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag"} /-->
			<?php endif; ?>
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->


