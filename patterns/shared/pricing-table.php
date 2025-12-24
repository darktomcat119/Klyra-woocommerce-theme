<?php
/**
 * Title: Pricing Table
 * Slug: klyra/pricing-table
 * Categories: klyra-content, klyra-cta
 * Description: A clean pricing table section perfect for showcasing plans or product tiers
 * Keywords: pricing, table, plans, comparison, pricing tiers
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Choose Your Plan', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"border":{"width":"1px","style":"solid","color":"var:preset|color|muted"}},"border":{"radius":"8px"}}} -->
		<div class="wp-block-column" style="border-width:1px;border-style:solid;border-color:var(--wp--preset--color--muted);border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:heading {"level":3,"textAlign":"center"} -->
			<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Basic', 'klyra' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( '$29', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"padding":{"left":"0"}}}} -->
			<ul class="wp-block-list" style="padding-left:0">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Feature one included', 'klyra' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Feature two included', 'klyra' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Feature three included', 'klyra' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#purchase"><?php esc_html_e( 'Get Started', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"border":{"width":"2px","style":"solid","color":"var:preset|color|primary"}},"border":{"radius":"8px"}}} -->
		<div class="wp-block-column" style="border-width:2px;border-style:solid;border-color:var(--wp--preset--color--primary);border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:heading {"level":3,"textAlign":"center"} -->
			<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Premium', 'klyra' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( '$79', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"padding":{"left":"0"}}}} -->
			<ul class="wp-block-list" style="padding-left:0">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'All basic features', 'klyra' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Premium feature one', 'klyra' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Premium feature two', 'klyra' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Priority support', 'klyra' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100,"textColor":"background","style":{"color":{"background":"var:preset|color|primary"}}} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="#purchase" style="background-color:var(--wp--preset--color--primary)"><?php esc_html_e( 'Get Started', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"border":{"width":"1px","style":"solid","color":"var:preset|color|muted"}},"border":{"radius":"8px"}}} -->
		<div class="wp-block-column" style="border-width:1px;border-style:solid;border-color:var(--wp--preset--color--muted);border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:heading {"level":3,"textAlign":"center"} -->
			<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Enterprise', 'klyra' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"}},"textColor":"primary"} -->
			<p class="has-text-align-center has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( 'Custom', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"padding":{"left":"0"}}}} -->
			<ul class="wp-block-list" style="padding-left:0">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'All premium features', 'klyra' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Custom solutions', 'klyra' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Dedicated support', 'klyra' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Custom integrations', 'klyra' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Contact Us', 'klyra' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

