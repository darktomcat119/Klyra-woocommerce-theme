<?php
/**
 * Title: Header (Minimal)
 * Slug: klyra/header-minimal
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport Width: 1400
 * Description: Minimal header with logo + menu + cart icon.
 * Keywords: header, minimal, navigation
 *
 * @package Klyra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"border":{"bottom":{"color":"var:preset|color|tertiary","width":"1px"}}}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"12px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":44,"shouldSyncIcon":true} /-->
			<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"700"}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"style":{"spacing":{"blockGap":"12px"}}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"overlayMenu":"mobile","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} /-->
			<?php if ( class_exists( 'WooCommerce' ) ) : ?>
			<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag"} /-->
			<?php endif; ?>
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->


