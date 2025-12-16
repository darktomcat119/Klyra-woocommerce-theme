<?php
/**
 * Enqueue script and style assets.
 *
 * @package CreateBlockPlugin
 */

namespace CreateBlockPlugin;

/**
 * Enqueue script and style assets.
 *
 * @since 1.0.0
 */
class SoftwareLicensing {

	/**
	 * Class instance.
	 *
	 * @var SoftwareLicensing
	 */
	private static $instance = null;

	/**
	 * Return Helpers Instance.
	 *
	 * @return object\Helpers
	 */
	public static function instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Register class with appropriate WordPress hooks
	 */
	public static function register() {
		$instance       = new self();
		self::$instance = new self();

		add_action( 'init', array( $instance, 'plugin_updater' ) );
	}

	/**
	 * Update the plugin.
	 *
	 * @return void
	 */
	public function plugin_updater() {

		// To support auto-updates, this needs to run during the wp_version_check cron job for privileged users.
		$doing_cron = defined( 'DOING_CRON' ) && DOING_CRON;
		if ( ! current_user_can( 'manage_options' ) && ! $doing_cron ) {
			return;
		}

		// retrieve our license key from the DB.
		$settings    = get_option( KLYRA_PLUGIN_SLUG_CAMEL_CASE . 'Settings' );
		$license_key = trim( $settings['licenseKey'] );

		// setup the updater.
		$edd_updater = new PluginUpdater(
			KLYRA_PLUGIN_STORE_URL,
			KLYRA_PLUGIN_FILE,
			array(
				'version' => KLYRA_PLUGIN_VERSION,        // current version number.
				'license' => $license_key,    // license key (used get_option above to retrieve from DB).
				'item_id' => KLYRA_PLUGIN_ITEM_ID, // ID of the product.
				'author'  => 'blockhandbook',  // author of this plugin.
				'beta'    => false,
			)
		);
	}

	/**
	 * Activate plugin license.
	 *
	 * @return void
	 */
	public function activate( $license_key ) {

		if ( isset( $license_key ) ) {
			$license_key = trim( $license_key );

			// data to send in our API request.
			$api_params = array(
				'edd_action' => 'activate_license',
				'license'    => $license_key,
				'item_name'  => urlencode( KLYRA_PLUGIN_ITEM_NAME ), // the name of our product in EDD.
				'url'        => home_url(),
			);

			// Call the custom API.
			$response = wp_remote_post( KLYRA_PLUGIN_STORE_URL, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );

			// make sure the response came back okay.
			if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {

				if ( is_wp_error( $response ) ) {
					$message = $response->get_error_message();
				} else {
					$message = __( 'An error occurred, please try again.' );
				}

			} else {

				$license_data = json_decode( wp_remote_retrieve_body( $response ) );

				if ( false === $license_data->success ) {

					switch ( $license_data->error ) {
						case 'expired':
							$message = sprintf(
								__( 'Your license key expired on %s.' ),
								date_i18n( get_option( 'date_format' ), strtotime( $license_data->expires, current_time( 'timestamp' ) ) )
							);
							break;

						case 'disabled':
						case 'revoked':
							$message = __( 'Your license key has been disabled.' );
							break;

						case 'missing':
							$message = __( 'Invalid license.' );
							break;

						case 'invalid':
						case 'site_inactive':
							$message = __( 'Your license is not active for this URL.' );
							break;

						case 'item_name_mismatch':
							$message = sprintf( __( 'This appears to be an invalid license key for %s.' ), KLYRA_PLUGIN_ITEM_NAME );
							break;

						case 'no_activations_left':
							$message = __( 'Your license key has reached its activation limit.' );
							break;

						default:
							$message = __( 'An error occurred, please try again.' );
							break;
					}
				}
			}

			return $license_data->license;
		}
	}

	/**
	 * Deactivate plugin license.
	 *
	 * @return void
	 */
	public function deactivate( $license_key ) {

		if ( isset( $license_key ) ) {
			$license_key = trim( $license_key );

			// Data to send in our API request.
			$api_params = array(
				'edd_action' => 'deactivate_license',
				'license'    => $license_key,
				'item_name'  => urlencode( KLYRA_PLUGIN_ITEM_NAME ), // the name of our product in EDD
				'url'        => home_url(),
			);

			// Call the custom API.
			$response = wp_remote_post( KLYRA_PLUGIN_STORE_URL, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );

			// make sure the response came back okay
			if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {

				if ( is_wp_error( $response ) ) {
					$message = $response->get_error_message();
				} else {
					$message = __( 'An error occurred, please try again.' );
				}

				// $base_url = admin_url( 'plugins.php?page=' . KLYRA_PLUGIN_LICENSE_PAGE );
				// $redirect = add_query_arg( array( 'sl_activation' => 'false', 'message' => urlencode( $message ) ), $base_url );

				// wp_redirect( $redirect );
				// exit();
			}

			// decode the license data
			$license_data = json_decode( wp_remote_retrieve_body( $response ) );

			// $license_data->license will be either "deactivated" or "failed"
			return $license_data->license;
		}
	}
}
