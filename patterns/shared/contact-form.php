<?php
/**
 * Title: Contact Form Section
 * Slug: klyra/contact-form
 * Categories: klyra-content
 * Description: A contact form section for customer inquiries
 * Keywords: contact, form, inquiry, message, support
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
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
			<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Get in Touch', 'klyra' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Have a question? We\'d love to hear from you. Send us a message and we\'ll respond as soon as possible.', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} -->
			<p style="margin-bottom:var(--wp--preset--spacing--small)"><strong><?php esc_html_e( 'Email:', 'klyra' ); ?></strong> <?php esc_html_e( 'hello@example.com', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><strong><?php esc_html_e( 'Phone:', 'klyra' ); ?></strong> <?php esc_html_e( '+1 (555) 123-4567', 'klyra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:html -->
			<div class="wp-block-html">
				<?php
				// Use contact form block or shortcode
				if ( function_exists( 'wpcf7_contact_form' ) ) {
					echo do_shortcode( '[contact-form-7]' );
				} else {
					// Fallback: Simple HTML form structure
					?>
					<form class="contact-form" method="post" action="">
						<p>
							<label for="name"><?php esc_html_e( 'Name', 'klyra' ); ?></label>
							<input type="text" id="name" name="name" required />
						</p>
						<p>
							<label for="email"><?php esc_html_e( 'Email', 'klyra' ); ?></label>
							<input type="email" id="email" name="email" required />
						</p>
						<p>
							<label for="message"><?php esc_html_e( 'Message', 'klyra' ); ?></label>
							<textarea id="message" name="message" rows="5" required></textarea>
						</p>
						<p>
							<button type="submit" class="wp-block-button__link"><?php esc_html_e( 'Send Message', 'klyra' ); ?></button>
						</p>
					</form>
					<?php
				}
				?>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

