<?php
/**
 * Title: Team/About Section
 * Slug: klyra/team-section
 * Categories: klyra-content
 * Description: A team or about section showcasing team members or company information
 * Keywords: team, about, members, people, company
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
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Meet Our Team', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xl)"><?php esc_html_e( 'The passionate people behind our success', 'klyra' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'team-member-1.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Team Member', 'klyra' ); ?>" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Team Member', 'klyra' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Role Title', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'team-member-2.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Team Member', 'klyra' ); ?>" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Team Member', 'klyra' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Role Title', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'team-member-3.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Team Member', 'klyra' ); ?>" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Team Member', 'klyra' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Role Title', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( klyra_get_image_url( 'team-member-4.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Team Member', 'klyra' ); ?>" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<h3 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Team Member', 'klyra' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Role Title', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

