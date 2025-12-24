<?php
/**
 * Title: Blog Grid
 * Slug: klyra/blog-grid
 * Categories: klyra-content
 * Description: A blog post grid layout perfect for showcasing articles
 * Keywords: blog, posts, articles, grid, news
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
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var:preset|font-size|gigantic","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--large);font-size:var(--wp--preset--font-size--gigantic);font-weight:700"><?php esc_html_e( 'Latest Articles', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
		<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
		<!-- wp:post-date /-->
		<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false} /-->
		<!-- /wp:post-template -->
		<!-- wp:query-pagination -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
		<p><?php esc_html_e( 'No posts found.', 'klyra' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->

