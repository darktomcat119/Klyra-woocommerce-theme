<?php
/**
 * Title: FAQ
 * Slug: klyra/faq
 * Categories: klyra-content
 * Description: Frequently asked questions in an accordion-style layout
 * Keywords: faq, questions, accordion, help
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
	<h2 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--huge)"><?php esc_html_e( 'Frequently Asked Questions', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large"}}} -->
			<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'Question 1?', 'klyra' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Answer to the first frequently asked question goes here.', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large"}}} -->
			<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'Question 2?', 'klyra' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Answer to the second frequently asked question goes here.', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|large"}}} -->
			<h3 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'Question 3?', 'klyra' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Answer to the third frequently asked question goes here.', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

