<?php
/**
 * Title: Footer (Columns)
 * Slug: klyra/footer-columns
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1400
 * Description: Modern 4-column footer with navigation, newsletter, and social links.
 * Keywords: footer, columns, newsletter, links
 *
 * @package Klyra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"full","backgroundColor":"surface","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|tertiary","width":"1px"}}}} -->
	<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--small)">
		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
		<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Secure checkout • Fast shipping • Easy returns', 'klyra' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
		<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Visa • MasterCard • PayPal • Apple Pay', 'klyra' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|xl"}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"35%"} -->
		<div class="wp-block-column" style="flex-basis:35%">
			<!-- wp:site-title {"level":3,"style":{"typography":{"fontWeight":"700"}}} /-->
			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<p class="has-muted-color has-text-color" style="margin-top:var(--wp--preset--spacing--small);font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'A modern block theme for premium WooCommerce stores. Built for performance, flexibility, and a clean editing experience.', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size is-style-logos-only">
				<!-- wp:social-link {"service":"instagram","url":"#"} /-->
				<!-- wp:social-link {"service":"facebook","url":"#"} /-->
				<!-- wp:social-link {"service":"x","url":"#"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
			<h4 class="wp-block-heading" style="font-weight:700"><?php esc_html_e( 'Company', 'klyra' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
			<h4 class="wp-block-heading" style="font-weight:700"><?php esc_html_e( 'Support', 'klyra' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
			<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'hello@example.com', 'klyra' ); ?><br><?php esc_html_e( '+1 (555) 123-4567', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
			<h4 class="wp-block-heading" style="font-weight:700"><?php esc_html_e( 'Newsletter', 'klyra' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
			<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Get product news, launches, and exclusive offers.', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:pattern {"slug":"klyra/newsletter-cta-compact"} /-->
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
		<!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-logos-only"} -->
		<ul class="wp-block-social-links has-small-icon-size is-style-logos-only">
			<!-- wp:social-link {"service":"instagram","url":"#"} /-->
			<!-- wp:social-link {"service":"facebook","url":"#"} /-->
			<!-- wp:social-link {"service":"x","url":"#"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->


