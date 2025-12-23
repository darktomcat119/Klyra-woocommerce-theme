<?php
/**
 * Title: Call to Action
 * Slug: klyra/call-to-action
 * Categories: klyra-cta
 * Description: A call-to-action section with heading, description, and buttons
 * Keywords: cta, call to action, button, conversion
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","right":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl","left":"var:preset|spacing|xxl"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxl);padding-right:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl);padding-left:var(--wp--preset--spacing--xxl)">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var:preset|font-size|huge","fontWeight":"700"}},"textColor":"background"} -->
		<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="font-size:var(--wp--preset--font-size--huge);font-weight:700"><?php esc_html_e( 'Ready to Get Started?', 'klyra' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|large"}},"textColor":"background"} -->
		<p class="has-text-align-center has-background-color has-text-color" style="font-size:var(--wp--preset--font-size--large)"><?php esc_html_e( 'Join thousands of satisfied customers and experience the difference today.', 'klyra' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textColor":"foreground","style":{"color":{"background":"var:preset|color|background"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-text-color has-background wp-element-button" href="#shop" style="background-color:var(--wp--preset--color--background)"><?php esc_html_e( 'Shop Now', 'klyra' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"background","style":{"color":{"background":"transparent"},"border":{"color":"var:preset|color|background","width":"2px"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color has-background has-border-color wp-element-button" href="#contact" style="border-color:var(--wp--preset--color--background);border-width:2px;background-color:transparent"><?php esc_html_e( 'Learn More', 'klyra' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

