<?php
/**
 * Title: Newsletter Signup
 * Slug: klyra/newsletter-signup
 * Categories: klyra-content, klyra-cta
 * Description: A newsletter signup section for email marketing
 * Keywords: newsletter, email, signup, subscribe, mailing list
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"textColor":"background"} -->
			<h2 class="wp-block-heading has-background-color has-text-color"><?php esc_html_e( 'Stay Updated', 'klyra' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"background"} -->
			<p class="has-background-color has-text-color"><?php esc_html_e( 'Subscribe to our newsletter for the latest updates, exclusive offers, and news.', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:html -->
			<div class="wp-block-html">
				<form class="newsletter-form" style="display:flex;gap:var(--wp--preset--spacing--small);">
					<input type="email" placeholder="<?php esc_attr_e( 'Your email address', 'klyra' ); ?>" required style="flex:1;padding:var(--wp--preset--spacing--medium);border-radius:4px;border:none;" />
					<button type="submit" class="wp-block-button__link" style="padding:var(--wp--preset--spacing--medium) var(--wp--preset--spacing--large);background-color:var(--wp--preset--color--background);color:var(--wp--preset--color--primary);border:none;border-radius:4px;cursor:pointer;white-space:nowrap;"><?php esc_html_e( 'Subscribe', 'klyra' ); ?></button>
				</form>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

