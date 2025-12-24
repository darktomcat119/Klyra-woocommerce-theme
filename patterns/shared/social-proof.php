<?php
/**
 * Title: Social Proof Section
 * Slug: klyra/social-proof
 * Categories: klyra-content
 * Description: A social proof section showcasing customer reviews and ratings
 * Keywords: social proof, reviews, ratings, testimonials, trust
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Trusted by Thousands', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( '4.9', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Average Rating', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( '10K+', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Happy Customers', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( '98%', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Satisfaction Rate', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

