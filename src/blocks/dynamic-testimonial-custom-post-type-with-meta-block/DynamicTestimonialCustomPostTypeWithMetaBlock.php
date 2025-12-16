<?php
/**
 * Register & render dynamic testimonial custom post type with meta block.
 *
 * @package CreateBlockPlugin
 */

namespace CreateBlockPlugin;

/**
 * Register & render dynamic testimonial custom post type with meta block in php.
 *
 * @since 1.0.0
 */
class DynamicTestimonialCustomPostTypeWithMetaBlock {
	/**
	 * Register class with appropriate WordPress hooks
	 */
	public static function register() {
		$instance = new self();
		add_action( 'init', array( $instance, 'register_block_type' ) );
	}

	/**
	 * Registers the `klyra/dynamic-testimonial-custom-post-type-with-meta-block` block on server.
	 */
	public function register_block_type() {
		// These scripts and styles are registered in includes/class-register-blocks.php.
		register_block_type_from_metadata(
			__DIR__,
			array(
				'render_callback' => array(
					$this,
					'render_block',
				),
			)
		);
	}

	/**
	 * Render dynamic block markup.
	 *
	 * @param Array  $attributes block attributes.
	 * @param String $content block inner content.
	 * @return string The dynamic block markup.
	 */
	public function render_block( $attributes, $content ) {

		$args = array(
			'post_type'        => $attributes['postType'],
			'numberposts'      => $attributes['postsToShow'],
			'post_status'      => 'publish',
			'order'            => $attributes['order'],
			'orderby'          => $attributes['orderBy'],
			'suppress_filters' => false,
		);

		if ( isset( $attributes['categories'] ) ) {
			$args['category__in'] = array_column( $attributes['categories'], 'id' );
		}

		$recent_posts = get_posts( $args );

		if ( count( $recent_posts ) === 0 ) {
			return 'No posts';
		}

		$markup = '';

		foreach ( $recent_posts as $post ) {
			$markup .= '<div class="bg-white">';
			$meta    = get_post_meta( $post->ID, 'testimonial_meta' )[0];

			// Add the post quote.
			if ( $attributes['showQuote'] && isset( $meta['quote'] ) ) {
				$markup .= sprintf(
					'<h2>%1$s</h2>',
					esc_html( $meta['quote'] )
				);
			}

			// Add the post customer.
			if ( $attributes['showCustomer'] && isset( $meta['customer'] ) ) {
				$markup .= sprintf(
					'<p>%1$s</p>',
					esc_html( $meta['customer'] )
				);
			}

			// Add the image.
			if ( $attributes['showImg'] && isset( $meta['mediaUrl'] ) ) {
				$markup .= sprintf(
					'<img class="" src="%1$s" />',
					esc_url( $meta['mediaUrl'] )
				);
			}

			$markup .= '</div>';
		}

		$class = 'wp-block-klyra-dynamic-testimonial-custom-post-type-with-meta-block';
		if ( isset( $attributes['align'] ) ) {
			$class .= ' align' . $attributes['align'];
		}

		return sprintf(
			'<div class="%1$s"><div class="posts-container">%2$s</div></div>',
			$class,
			$markup
		);
	}
}

/**
 * Initialize class.
 *
 * @since 1.0.0
 */
DynamicTestimonialCustomPostTypeWithMetaBlock::register();
