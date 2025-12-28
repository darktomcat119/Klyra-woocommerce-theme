<?php
/**
 * Title: Header (Glass/Transparent)
 * Slug: klyra/header-glass
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport Width: 1400
 * Description: Modern glassmorphism header with transparency - ideal for hero sections.
 * Keywords: header, glass, transparent, modern, navigation
 *
 * @package Klyra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"full","className":"klyra-glass","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
<div class="wp-block-group alignfull klyra-glass" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"24px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"12px"}}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":48,"shouldSyncIcon":true} /-->
			<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"},"overlayMenu":"mobile","style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"typography":{"fontWeight":"500"}}} /-->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"style":{"spacing":{"blockGap":"16px"}}} -->
		<div class="wp-block-group">
			<?php if ( class_exists( 'WooCommerce' ) ) : ?>
			<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only"} /-->
			<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag"} /-->
			<?php endif; ?>
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline","fontSize":"small"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="#"><?php esc_html_e( 'Contact', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->


