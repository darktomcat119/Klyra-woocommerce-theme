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

<!-- wp:group {"align":"wide","backgroundColor":"surface","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var(--wp--custom--border-radius--large)","color":"var:preset|color|tertiary","width":"1px"}}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background" style="border-color:var(--wp--preset--color--tertiary);border-width:1px;border-radius:var(--wp--custom--border-radius--large);padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--large)">
	<!-- wp:columns {"align":"wide","isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var:preset|spacing|xl"}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700"}}} -->
			<h2 class="wp-block-heading" style="font-weight:700"><?php esc_html_e( 'Stay Updated', 'klyra' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Get launches, offers, and product tips. Add your preferred newsletter form block here (Mailchimp / FluentCRM / etc.).', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Subscribe', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Learn More', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

