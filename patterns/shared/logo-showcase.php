<?php
/**
 * Title: Logo Showcase
 * Slug: klyra/logo-showcase
 * Categories: klyra-content
 * Description: A logo showcase section for displaying partner or client logos
 * Keywords: logos, partners, clients, brands, showcase
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
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"muted"} -->
	<h2 class="wp-block-heading has-text-align-center has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Trusted By', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'logo-1.png' ) ); ?>" alt="<?php esc_attr_e( 'Partner Logo', 'klyra' ); ?>" style="border-radius:4px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'logo-2.png' ) ); ?>" alt="<?php esc_attr_e( 'Partner Logo', 'klyra' ); ?>" style="border-radius:4px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'logo-3.png' ) ); ?>" alt="<?php esc_attr_e( 'Partner Logo', 'klyra' ); ?>" style="border-radius:4px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'logo-4.png' ) ); ?>" alt="<?php esc_attr_e( 'Partner Logo', 'klyra' ); ?>" style="border-radius:4px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'logo-5.png' ) ); ?>" alt="<?php esc_attr_e( 'Partner Logo', 'klyra' ); ?>" style="border-radius:4px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

