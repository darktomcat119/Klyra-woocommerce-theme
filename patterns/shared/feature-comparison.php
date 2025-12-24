<?php
/**
 * Title: Feature Comparison
 * Slug: klyra/feature-comparison
 * Categories: klyra-content, klyra-cta
 * Description: A feature comparison table perfect for showcasing product differences
 * Keywords: comparison, features, table, product comparison, plans
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
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--xl)"><?php esc_html_e( 'Compare Features', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:table {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
	<figure class="wp-block-table alignwide" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">
		<table>
			<thead>
				<tr>
					<th><?php esc_html_e( 'Feature', 'klyra' ); ?></th>
					<th><?php esc_html_e( 'Basic', 'klyra' ); ?></th>
					<th><?php esc_html_e( 'Premium', 'klyra' ); ?></th>
					<th><?php esc_html_e( 'Enterprise', 'klyra' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php esc_html_e( 'Feature One', 'klyra' ); ?></td>
					<td>✓</td>
					<td>✓</td>
					<td>✓</td>
				</tr>
				<tr>
					<td><?php esc_html_e( 'Feature Two', 'klyra' ); ?></td>
					<td>—</td>
					<td>✓</td>
					<td>✓</td>
				</tr>
				<tr>
					<td><?php esc_html_e( 'Feature Three', 'klyra' ); ?></td>
					<td>—</td>
					<td>—</td>
					<td>✓</td>
				</tr>
				<tr>
					<td><?php esc_html_e( 'Support', 'klyra' ); ?></td>
					<td><?php esc_html_e( 'Email', 'klyra' ); ?></td>
					<td><?php esc_html_e( 'Priority', 'klyra' ); ?></td>
					<td><?php esc_html_e( '24/7', 'klyra' ); ?></td>
				</tr>
			</tbody>
		</table>
	</figure>
	<!-- /wp:table -->
</div>
<!-- /wp:group -->

