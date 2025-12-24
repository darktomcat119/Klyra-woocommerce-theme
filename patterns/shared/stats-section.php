<?php
/**
 * Title: Stats/Numbers Section
 * Slug: klyra/stats-section
 * Categories: klyra-content
 * Description: A statistics section showcasing key numbers and achievements
 * Keywords: stats, numbers, achievements, metrics, counter
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--xl)"><?php esc_html_e( 'Our Impact', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( '10K+', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"}},"textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--medium)"><?php esc_html_e( 'Happy Customers', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( '500+', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"}},"textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--medium)"><?php esc_html_e( 'Products', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( '50+', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"}},"textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--medium)"><?php esc_html_e( 'Countries', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( '24/7', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|medium"}},"textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--medium)"><?php esc_html_e( 'Support', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

