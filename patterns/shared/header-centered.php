<?php
/**
 * Title: Header (Centered)
 * Slug: klyra/header-centered
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport Width: 1400
 * Description: Centered logo header with navigation below.
 * Keywords: header, centered, navigation
 *
 * @package Klyra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"18px","bottom":"18px"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:18px;padding-bottom:18px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"style":{"spacing":{"blockGap":"12px"}}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-logo {"width":56,"shouldSyncIcon":true} /-->
		<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"700"}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"10px"} -->
	<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} /-->
</div>
<!-- /wp:group -->


