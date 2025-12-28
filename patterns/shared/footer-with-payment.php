<?php
/**
 * Title: Footer (With Payment / Trust)
 * Slug: klyra/footer-with-payment
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1400
 * Description: E‑commerce footer with payment methods and trust indicators.
 * Keywords: footer, payment, trust, ecommerce
 *
 * @package Klyra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"full","backgroundColor":"tertiary","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"align":"wide","isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var:preset|spacing|xl"}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:site-title {"level":3,"style":{"typography":{"fontWeight":"700"}}} /-->
			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
			<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Fast delivery, secure checkout, and support that actually responds.', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
			<h4 class="wp-block-heading" style="font-weight:700"><?php esc_html_e( 'Payment methods', 'klyra' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
			<p style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Visa • MasterCard • PayPal • Apple Pay • Google Pay', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
			<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Secure checkout • SSL encrypted • Easy returns', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"align":"wide"} -->
	<hr class="wp-block-separator alignwide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( '© ', 'klyra' ); ?><?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'All rights reserved.', 'klyra' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Secure checkout • Fast support', 'klyra' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->


