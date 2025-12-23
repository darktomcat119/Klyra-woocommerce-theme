<?php
/**
 * License Integration
 *
 * Handles license admin interface and integration
 *
 * @package Klyra
 * @since 1.0.0
 */

namespace Klyra\Integrations\License;

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * License Integration Class
 *
 * @since 1.0.0
 */
class License {

	/**
	 * License manager instance
	 *
	 * @var LicenseManager
	 */
	private $license_manager;

	/**
	 * Initialize license system
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->license_manager = new LicenseManager();
		add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
	}

	/**
	 * Add admin menu for license management
	 *
	 * @since 1.0.0
	 */
	public function add_admin_menu() {
		add_theme_page(
			__( 'Theme License', 'klyra' ),
			__( 'License', 'klyra' ),
			'manage_options',
			'klyra-license',
			array( $this, 'render_license_page' )
		);
	}

	/**
	 * Render license settings page
	 *
	 * @since 1.0.0
	 */
	public function render_license_page() {
		$status          = $this->license_manager->get_status();
		$license_key_masked = $this->license_manager->get_license_key_masked();
		$is_licensed     = $this->license_manager->is_licensed();

		// Handle form submission
		if ( isset( $_POST['klyra_license_action'] ) && check_admin_referer( 'klyra_license_action' ) ) {
			$action = sanitize_text_field( $_POST['klyra_license_action'] );

			if ( $action === 'activate' && isset( $_POST['license_key'] ) ) {
				$license_key = sanitize_text_field( $_POST['license_key'] );
				$result      = $this->license_manager->activate_license( $license_key );

				if ( $result['success'] ) {
					echo '<div class="notice notice-success"><p>' . esc_html( $result['message'] ) . '</p></div>';
					$status      = 'active';
					$is_licensed = true;
				} else {
					echo '<div class="notice notice-error"><p>' . esc_html( $result['message'] ) . '</p></div>';
				}
			} elseif ( $action === 'deactivate' ) {
				$result = $this->license_manager->deactivate_license();

				if ( $result['success'] ) {
					echo '<div class="notice notice-success"><p>' . esc_html( $result['message'] ) . '</p></div>';
					$status           = 'inactive';
					$is_licensed      = false;
					$license_key_masked = '';
				}
			} elseif ( $action === 'validate' ) {
				$is_valid = $this->license_manager->validate_license( true );

				if ( $is_valid ) {
					echo '<div class="notice notice-success"><p>' . esc_html__( 'License is valid.', 'klyra' ) . '</p></div>';
					$status = 'active';
				} else {
					echo '<div class="notice notice-error"><p>' . esc_html__( 'License validation failed.', 'klyra' ) . '</p></div>';
					$status = 'inactive';
				}
			}
		}
		?>
		<div class="wrap">
			<h1><?php echo esc_html__( 'Theme License', 'klyra' ); ?></h1>

			<div class="klyra-license-status">
				<h2><?php echo esc_html__( 'License Status', 'klyra' ); ?></h2>
				<p>
					<strong><?php echo esc_html__( 'Status:', 'klyra' ); ?></strong>
					<span class="license-status-<?php echo esc_attr( $status ); ?>">
						<?php echo esc_html( ucfirst( $status ) ); ?>
					</span>
				</p>

				<?php if ( $is_licensed ) : ?>
					<p>
						<strong><?php echo esc_html__( 'License Key:', 'klyra' ); ?></strong>
						<code><?php echo esc_html( $license_key_masked ); ?></code>
					</p>
				<?php endif; ?>
			</div>

			<div class="klyra-license-actions">
				<h2><?php echo esc_html__( 'License Management', 'klyra' ); ?></h2>

				<form method="post" action="">
					<?php wp_nonce_field( 'klyra_license_action' ); ?>
					<?php if ( ! $is_licensed ) : ?>
						<table class="form-table">
							<tbody>
								<tr>
									<th scope="row"><label for="license_key"><?php echo esc_html__( 'License Key', 'klyra' ); ?></label></th>
									<td>
										<input type="text" id="license_key" name="license_key" value="" class="regular-text" placeholder="<?php esc_attr_e( 'Enter your license key', 'klyra' ); ?>" required />
										<p class="description"><?php echo esc_html__( 'Enter your theme license key to enable updates and premium features.', 'klyra' ); ?></p>
									</td>
								</tr>
							</tbody>
						</table>
						<?php submit_button( __( 'Activate License', 'klyra' ), 'primary', 'klyra_license_action', true, array( 'value' => 'activate' ) ); ?>
					<?php else : ?>
						<?php submit_button( __( 'Deactivate License', 'klyra' ), 'secondary', 'klyra_license_action', true, array( 'value' => 'deactivate' ) ); ?>
						<?php submit_button( __( 'Validate License', 'klyra' ), 'secondary', 'klyra_license_action', true, array( 'value' => 'validate' ) ); ?>
					<?php endif; ?>
				</form>
			</div>
		</div>
		<?php
	}
}

