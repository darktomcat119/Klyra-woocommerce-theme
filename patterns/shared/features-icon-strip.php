<?php
/**
 * Title: Features (Icon Strip)
 * Slug: klyra/features-icon-strip
 * Categories: klyra-content
 * Description: A modern feature strip with icon-like badges and short benefit statements.
 * Keywords: features, benefits, icons, trust
 *
 * @package Klyra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"full","backgroundColor":"surface","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:columns {"align":"wide","isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"12px"}}} -->
			<div class="wp-block-group">
				<!-- wp:group {"backgroundColor":"background","layout":{"type":"constrained"},"style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"12px","right":"12px"}}}} -->
				<div class="wp-block-group has-background-background-color has-background" style="border-radius:999px;padding-top:10px;padding-right:12px;padding-bottom:10px;padding-left:12px">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700"><?php esc_html_e( '✓', 'klyra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700"><?php esc_html_e( 'Fast delivery', 'klyra' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"0"}}}} -->
					<p class="has-muted-color has-text-color" style="margin-top:0;font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Quick dispatch and tracked shipping options.', 'klyra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"12px"}}} -->
			<div class="wp-block-group">
				<!-- wp:group {"backgroundColor":"background","layout":{"type":"constrained"},"style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"12px","right":"12px"}}}} -->
				<div class="wp-block-group has-background-background-color has-background" style="border-radius:999px;padding-top:10px;padding-right:12px;padding-bottom:10px;padding-left:12px">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700"><?php esc_html_e( '★', 'klyra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700"><?php esc_html_e( 'Quality-first', 'klyra' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"0"}}}} -->
					<p class="has-muted-color has-text-color" style="margin-top:0;font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Premium materials and consistent finishing.', 'klyra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"12px"}}} -->
			<div class="wp-block-group">
				<!-- wp:group {"backgroundColor":"background","layout":{"type":"constrained"},"style":{"border":{"radius":"999px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"12px","right":"12px"}}}} -->
				<div class="wp-block-group has-background-background-color has-background" style="border-radius:999px;padding-top:10px;padding-right:12px;padding-bottom:10px;padding-left:12px">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700"><?php esc_html_e( '↺', 'klyra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700"><?php esc_html_e( 'Easy returns', 'klyra' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var:preset|font-size|small"},"spacing":{"margin":{"top":"0"}}}} -->
					<p class="has-muted-color has-text-color" style="margin-top:0;font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Simple, customer-friendly return policy.', 'klyra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->


