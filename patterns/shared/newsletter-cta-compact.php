<?php
/**
 * Title: Newsletter (Compact CTA)
 * Slug: klyra/newsletter-cta-compact
 * Categories: klyra-content, klyra-cta
 * Description: Compact newsletter call-to-action designed for footers (no Custom HTML).
 * Keywords: newsletter, subscribe, footer, cta
 *
 * @package Klyra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"backgroundColor":"tertiary","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|xs"},"border":{"radius":"var(--wp--custom--border-radius--medium)"}}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:var(--wp--custom--border-radius--medium);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|small"}}} -->
	<p style="font-size:var(--wp--preset--font-size--small);font-weight:600"><?php esc_html_e( 'Newsletter', 'klyra' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
	<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Add your form block, or link to a signup page.', 'klyra' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"8px"}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"fontSize":"small"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="#"><?php esc_html_e( 'Subscribe', 'klyra' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->


