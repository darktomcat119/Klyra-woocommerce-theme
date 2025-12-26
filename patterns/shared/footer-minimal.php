<?php
/**
 * Title: Footer (Minimal)
 * Slug: klyra/footer-minimal
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1400
 * Description: Minimal footer with copyright and social links.
 * Keywords: footer, minimal
 *
 * @package Klyra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"full","backgroundColor":"surface","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( '© ', 'klyra' ); ?><?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'Klyra. All rights reserved.', 'klyra' ); ?></p>
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


