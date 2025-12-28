<?php
/**
 * Title: Header (Centered)
 * Slug: klyra/header-centered
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport Width: 1400
 * Description: Centered logo header with navigation below.
 * Keywords: header, centered, navigation
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
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"style":{"spacing":{"blockGap":"14px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-logo {"width":58,"shouldSyncIcon":true} /-->
		<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"700"}}} /-->
		<?php if ( class_exists( 'WooCommerce' ) ) : ?>
		<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag"} /-->
		<?php endif; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs"},"blockGap":"var:preset|spacing|medium"}}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--xs)">
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"},"overlayMenu":"mobile","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->


