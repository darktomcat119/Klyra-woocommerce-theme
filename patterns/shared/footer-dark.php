<?php
/**
 * Title: Footer (Dark Premium)
 * Slug: klyra/footer-dark
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1400
 * Description: Premium dark footer with gradient accent, modern layout, and social proof.
 * Keywords: footer, dark, premium, modern
 *
 * @package Klyra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"color":{"background":"#1a1a2e"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#1a1a2e;padding-top:0;padding-bottom:0">

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4px","bottom":"0"}},"background":{"backgroundImage":{"url":"","id":0,"source":"file","title":""}}},"gradient":"vivid-cyan-blue-to-vivid-purple","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-vivid-cyan-blue-to-vivid-purple-gradient-background has-background" style="padding-top:4px;padding-bottom:0"></div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xl)">

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}}} -->
		<div class="wp-block-columns alignwide">

			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"12px"}}} -->
				<div class="wp-block-group">
					<!-- wp:site-logo {"width":48,"shouldSyncIcon":true} /-->
					<!-- wp:site-title {"level":3,"style":{"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|large"},"elements":{"link":{"color":{"text":"#ffffff"}}},"color":{"text":"#ffffff"}}} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}},"color":{"text":"#a0a0b0"},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"1.7"}}} -->
				<p style="margin-top:var(--wp--preset--spacing--medium);color:#a0a0b0;font-size:var(--wp--preset--font-size--small);line-height:1.7"><?php esc_html_e( 'Crafted for modern e-commerce. Built with performance, flexibility, and exceptional user experience in mind.', 'klyra' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","size":"has-normal-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"className":"is-style-logos-only"} -->
				<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--medium)">
					<!-- wp:social-link {"url":"#","service":"instagram"} /-->
					<!-- wp:social-link {"url":"#","service":"facebook"} /-->
					<!-- wp:social-link {"url":"#","service":"x"} /-->
					<!-- wp:social-link {"url":"#","service":"youtube"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"15%"} -->
			<div class="wp-block-column" style="flex-basis:15%">
				<!-- wp:heading {"level":4,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|small","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
				<h4 class="wp-block-heading" style="color:#ffffff;font-size:var(--wp--preset--font-size--small);font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Shop', 'klyra' ); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:list {"style":{"spacing":{"padding":{"left":"0"}},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"2"},"color":{"text":"#a0a0b0"},"elements":{"link":{"color":{"text":"#a0a0b0"},":hover":{"color":{"text":"#ffffff"}}}}}} -->
				<ul style="padding-left:0;color:#a0a0b0;font-size:var(--wp--preset--font-size--small);line-height:2"><li><a href="#"><?php esc_html_e( 'All Products', 'klyra' ); ?></a></li><li><a href="#"><?php esc_html_e( 'New Arrivals', 'klyra' ); ?></a></li><li><a href="#"><?php esc_html_e( 'Best Sellers', 'klyra' ); ?></a></li><li><a href="#"><?php esc_html_e( 'Sale', 'klyra' ); ?></a></li></ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"15%"} -->
			<div class="wp-block-column" style="flex-basis:15%">
				<!-- wp:heading {"level":4,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|small","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
				<h4 class="wp-block-heading" style="color:#ffffff;font-size:var(--wp--preset--font-size--small);font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Help', 'klyra' ); ?></h4>
				<!-- /wp:heading -->
				<!-- wp:list {"style":{"spacing":{"padding":{"left":"0"}},"typography":{"fontSize":"var:preset|font-size|small","lineHeight":"2"},"color":{"text":"#a0a0b0"},"elements":{"link":{"color":{"text":"#a0a0b0"},":hover":{"color":{"text":"#ffffff"}}}}}} -->
				<ul style="padding-left:0;color:#a0a0b0;font-size:var(--wp--preset--font-size--small);line-height:2"><li><a href="#"><?php esc_html_e( 'FAQ', 'klyra' ); ?></a></li><li><a href="#"><?php esc_html_e( 'Shipping', 'klyra' ); ?></a></li><li><a href="#"><?php esc_html_e( 'Returns', 'klyra' ); ?></a></li><li><a href="#"><?php esc_html_e( 'Contact', 'klyra' ); ?></a></li></ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%">
				<!-- wp:heading {"level":4,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|small","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
				<h4 class="wp-block-heading" style="color:#ffffff;font-size:var(--wp--preset--font-size--small);font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Newsletter', 'klyra' ); ?></h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"color":{"text":"#a0a0b0"},"typography":{"fontSize":"var:preset|font-size|small"}}} -->
				<p style="color:#a0a0b0;font-size:var(--wp--preset--font-size--small)"><?php esc_html_e( 'Subscribe for exclusive offers, early access, and style tips.', 'klyra' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
					<!-- wp:button {"width":100,"className":"is-style-outline","style":{"border":{"width":"1px"}},"fontSize":"small"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="#" style="border-width:1px"><?php esc_html_e( 'Subscribe Now', 'klyra' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"border":{"top":{"color":"#2a2a3e","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:#2a2a3e;border-top-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
		<!-- wp:paragraph {"style":{"color":{"text":"#6c6c7c"},"typography":{"fontSize":"var:preset|font-size|x-small"}}} -->
		<p style="color:#6c6c7c;font-size:var(--wp--preset--font-size--x-small)"><?php esc_html_e( '© ', 'klyra' ); ?><?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'All rights reserved. Made with ♥', 'klyra' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"color":{"text":"#6c6c7c"},"typography":{"fontSize":"var:preset|font-size|x-small"}}} -->
		<p style="color:#6c6c7c;font-size:var(--wp--preset--font-size--x-small)"><?php esc_html_e( 'Visa • MasterCard • PayPal • Apple Pay • Secure SSL', 'klyra' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->


