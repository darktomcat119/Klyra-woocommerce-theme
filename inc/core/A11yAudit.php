<?php
/**
 * A11y Audit (Debug)
 *
 * Logs label[for] -> missing id mismatches for runtime evidence (debug mode).
 * Enabled only for admins when ?klyra_a11y=1 is present.
 *
 * @package Klyra
 * @since 1.0.0
 */

namespace Klyra\Core;

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class A11yAudit {
	/**
	 * Whether audit is enabled for this request.
	 *
	 * @var bool
	 */
	private $enabled = false;

	/**
	 * Output buffering level before starting our buffer.
	 *
	 * @var int
	 */
	private $base_ob_level = 0;

	/**
	 * Initialize.
	 */
	public function __construct() {
		add_action( 'template_redirect', array( $this, 'maybe_start' ), 0 );
		add_action( 'shutdown', array( $this, 'maybe_analyze' ), 0 );
	}

	/**
	 * Start buffering if enabled.
	 */
	public function maybe_start() {
		if ( is_admin() ) {
			return;
		}

		if ( ! is_user_logged_in() || ! current_user_can( 'manage_options' ) ) {
			return;
		}

		if ( ! isset( $_GET['klyra_a11y'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
			return;
		}

		$this->enabled       = true;
		$this->base_ob_level = ob_get_level();
		ob_start();
	}

	/**
	 * Analyze buffered HTML and log mismatch summary.
	 */
	public function maybe_analyze() {
		if ( ! $this->enabled ) {
			return;
		}

		// Collect all buffers started after our base level.
		$html = '';
		while ( ob_get_level() > $this->base_ob_level ) {
			$chunk = ob_get_clean();
			if ( is_string( $chunk ) ) {
				$html .= $chunk;
			}
		}

		if ( $html === '' ) {
			$this->log(
				'a11y-post',
				'A11Y_PHP_EMPTY',
				'No HTML captured (buffer empty)',
				array()
			);
			return;
		}

		// Extract ids.
		$ids = array();
		if ( preg_match_all( '/\\bid\\s*=\\s*([\"\\\'])([^\"\\\']+)\\1/i', $html, $id_matches ) ) {
			foreach ( $id_matches[2] as $id ) {
				$ids[ $id ] = true;
			}
		}

		// Extract label for= values.
		$labels = array();
		if ( preg_match_all( '/<label\\b[^>]*\\bfor\\s*=\\s*([\"\\\'])([^\"\\\']+)\\1[^>]*>/i', $html, $label_matches ) ) {
			foreach ( $label_matches[2] as $for_id ) {
				$for_id = trim( $for_id );
				if ( $for_id !== '' ) {
					$labels[] = $for_id;
				}
			}
		}

		$mismatches = array();
		foreach ( $labels as $for_id ) {
			if ( isset( $ids[ $for_id ] ) ) {
				continue;
			}
			$mismatches[] = array( 'for' => $for_id );
			if ( count( $mismatches ) >= 10 ) {
				break;
			}
		}

		$this->log(
			'a11y-post',
			'A11Y_PHP_1',
			'label[for] audit (PHP)',
			array(
				'path'          => isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '',
				'totalLabels'   => count( $labels ),
				'mismatchCount' => count( $mismatches ),
				'mismatches'    => $mismatches,
			)
		);
	}

	/**
	 * Append NDJSON line to debug log.
	 *
	 * @param string $run_id Run id.
	 * @param string $hypothesis_id Hypothesis id.
	 * @param string $message Message.
	 * @param array  $data Data.
	 */
	private function log( $run_id, $hypothesis_id, $message, $data ) {
		$payload = array(
			'sessionId'     => 'debug-session',
			'runId'         => $run_id,
			'hypothesisId'  => $hypothesis_id,
			'location'      => 'inc/core/A11yAudit.php',
			'message'       => $message,
			'data'          => $data,
			'timestamp'     => round( microtime( true ) * 1000 ),
		);

		// Prefer ingest endpoint (avoids filesystem permission issues). Do not log secrets/PII.
		if ( function_exists( 'wp_remote_post' ) ) {
			wp_remote_post(
				'http://127.0.0.1:7242/ingest/abb7cd56-8175-400a-8613-c9a72c826faa',
				array(
					'headers'  => array( 'Content-Type' => 'application/json' ),
					'body'     => wp_json_encode( $payload ),
					'timeout'  => 0.5,
					'blocking' => false,
				)
			);
		}

		// Fallback: direct write (may be blocked in some environments).
		@file_put_contents( 'c:\\xampp\\htdocs\\wwoocommerce\\.cursor\\debug.log', wp_json_encode( $payload ) . "\n", FILE_APPEND ); // phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged,WordPress.WP.AlternativeFunctions.file_system_read_file_put_contents
	}
}


