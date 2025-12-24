<?php
/**
 * Title: Testimonials
 * Slug: klyra/testimonials
 * Categories: klyra-content
 * Description: Display customer testimonials in a clean layout
 * Keywords: testimonials, reviews, customers, social proof
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var:preset|font-size|huge"}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--huge)"><?php esc_html_e( 'What Our Customers Say', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}}} -->
				<p style="font-style:italic">"<?php esc_html_e( 'Excellent quality and fast shipping. Highly recommend!', 'klyra' ); ?>"</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
				<p style="font-size:var(--wp--preset--font-size--small)"><strong>— <?php esc_html_e( 'Customer Name', 'klyra' ); ?></strong></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}}} -->
				<p style="font-style:italic">"<?php esc_html_e( 'Amazing products and great customer service. Will shop again!', 'klyra' ); ?>"</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
				<p style="font-size:var(--wp--preset--font-size--small)"><strong>— <?php esc_html_e( 'Customer Name', 'klyra' ); ?></strong></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}}} -->
				<p style="font-style:italic">"<?php esc_html_e( 'Love the quality and design. Perfect for my needs!', 'klyra' ); ?>"</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"}}} -->
				<p style="font-size:var(--wp--preset--font-size--small)"><strong>— <?php esc_html_e( 'Customer Name', 'klyra' ); ?></strong></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

