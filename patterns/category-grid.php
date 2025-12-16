<?php
/**
 * Title: Category Grid
 * Slug: klyra/category-grid
 * Categories: klyra-products, woocommerce
 * Description: A grid showcasing product categories with images and links
 * Keywords: categories, grid, woocommerce, shop
 *
 * @package Klyra
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$category_1_url = get_stylesheet_directory_uri() . '/assets/images/category-1-bg.jpg';
$category_2_url = get_stylesheet_directory_uri() . '/assets/images/category-2-bg.jpg';
$category_3_url = get_stylesheet_directory_uri() . '/assets/images/category-3-bg.jpg';
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"var:preset|font-size|huge"}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="font-size:var(--wp--preset--font-size--huge)"><?php esc_html_e( 'Shop by Category', 'klyra' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo esc_url( $category_1_url ); ?>","minHeight":300,"minHeightUnit":"px","dimRatio":50,"overlayColor":"foreground"} -->
			<div class="wp-block-cover has-foreground-background-color has-background-dim" style="min-height:300px;height:100%;">
				<img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Category 1', 'klyra' ); ?>" src="<?php echo esc_url( $category_1_url ); ?>" data-object-fit="cover" style="object-fit:cover;object-position:center;width:100%;height:100%;min-width:100%;min-height:100%;"/>
				<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-50 has-background-dim"></span>
				<div class="wp-block-cover__inner-container">
					<!-- wp:heading {"textAlign":"center","level":3,"textColor":"background"} -->
					<h3 class="wp-block-heading has-text-align-center has-background-color has-text-color"><?php esc_html_e( 'Category 1', 'klyra' ); ?></h3>
					<!-- /wp:heading -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo esc_url( $category_2_url ); ?>","minHeight":300,"minHeightUnit":"px","dimRatio":50,"overlayColor":"foreground"} -->
			<div class="wp-block-cover has-foreground-background-color has-background-dim" style="min-height:300px;height:100%;">
				<img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Category 2', 'klyra' ); ?>" src="<?php echo esc_url( $category_2_url ); ?>" data-object-fit="cover" style="object-fit:cover;object-position:center;width:100%;height:100%;min-width:100%;min-height:100%;"/>
				<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-50 has-background-dim"></span>
				<div class="wp-block-cover__inner-container">
					<!-- wp:heading {"textAlign":"center","level":3,"textColor":"background"} -->
					<h3 class="wp-block-heading has-text-align-center has-background-color has-text-color"><?php esc_html_e( 'Category 2', 'klyra' ); ?></h3>
					<!-- /wp:heading -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo esc_url( $category_3_url ); ?>","minHeight":300,"minHeightUnit":"px","dimRatio":50,"overlayColor":"foreground"} -->
			<div class="wp-block-cover has-foreground-background-color has-background-dim" style="min-height:300px;height:100%;">
				<img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Category 3', 'klyra' ); ?>" src="<?php echo esc_url( $category_3_url ); ?>" data-object-fit="cover" style="object-fit:cover;object-position:center;width:100%;height:100%;min-width:100%;min-height:100%;"/>
				<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-50 has-background-dim"></span>
				<div class="wp-block-cover__inner-container">
					<!-- wp:heading {"textAlign":"center","level":3,"textColor":"background"} -->
					<h3 class="wp-block-heading has-text-align-center has-background-color has-text-color"><?php esc_html_e( 'Category 3', 'klyra' ); ?></h3>
					<!-- /wp:heading -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

