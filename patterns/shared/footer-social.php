<?php
/**
 * Title: Footer (Social)
 * Slug: klyra/footer-social
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1400
 * Description: Modern footer with social links, short about text, and a clean bottom bar.
 * Keywords: footer, social, modern
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
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"var:preset|spacing|xl"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-group">
			<!-- wp:site-title {"level":3,"style":{"typography":{"fontWeight":"700"}}} /-->
			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
			<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'A clean, fast block theme for modern stores and businesses.', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
			<h4 class="wp-block-heading" style="font-weight:700"><?php esc_html_e( 'Connect', 'klyra' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:social-links {"size":"has-normal-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-normal-icon-size is-style-logos-only">
				<!-- wp:social-link {"service":"facebook","url":"#"} /-->
				<!-- wp:social-link {"service":"instagram","url":"#"} /-->
				<!-- wp:social-link {"service":"x","url":"#"} /-->
				<!-- wp:social-link {"service":"youtube","url":"#"} /-->
				<!-- wp:social-link {"service":"linkedin","url":"#"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"wide"} -->
	<hr class="wp-block-separator alignwide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( '© ', 'klyra' ); ?><?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'All rights reserved.', 'klyra' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Powered by WordPress + WooCommerce', 'klyra' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->


