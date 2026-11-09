<?php
/**
 * REST endpoint the About page's JS calls to fetch demo listings.
 *
 * @package orlyn
 */

namespace ORLYN;

/**
 * Registers the demo-listing REST endpoint.
 */
class Demo_List_API {
	/**
	 * Shared script/style handle for the About page's registered assets.
	 *
	 * @var string
	 */
	public static $asset_handle = 'orlyn-admin-about-page';

	/**
	 * Hooks the REST endpoint registration.
	 */
	public function __construct() {
		add_action( 'rest_api_init', array( __CLASS__, 'add_endpoint' ) );
	}

	/**
	 * Registers the demo-listing REST route.
	 */
	public static function add_endpoint() {
		if ( defined( 'GUTENIFY_VERSION' ) && function_exists( 'gutenify' ) ) {
			return false;
		}
		// Baked at sync time from gtfy.demoListWithoutPlugin. A free /
		// wordpress.org build sets it false so the theme never calls the
		// remote demo catalog — the About page lists Theme Features only.
		if ( ! false ) {
			return false;
		}
		register_rest_route(
			'gutenify/demo-import/v1',
			'/demos',
			array(
				'methods'             => 'GET',
				'callback'            => array( __CLASS__, 'get_demos' ),
				'permission_callback' => function () {
					return current_user_can( 'manage_options' );
				},
			)
		);
	}

	/**
	 * Get all demos.
	 *
	 * @return void
	 */
	public static function get_demos() {
		$demo_import_base_url = 'https://demo.gutenify.com';

		$filters = array(
			'theme_category' => 'orlyn',
		);

		$url = add_query_arg( $filters, $demo_import_base_url . '/wp-json/liger/v1/demos' );

		$json_data = wp_remote_get(
			$url,
			array(
				'timeout' => 10,
				'headers' => array(
					'liger_hkey' => 'sskdfjks3qw4sdfjs', // gitleaks:allow -- public demo-content API identifier, not a privileged credential.
				),
			)
		);

		if ( is_wp_error( $json_data ) ) {
			wp_send_json( array() );
		}

		try {
			$json = json_decode( wp_remote_retrieve_body( $json_data ) );
			$json = ! empty( $json ) ? $json : array();
		} catch ( \Exception $ex ) {
			$json = array();
		}

		wp_send_json( $json );
	}
}


new Demo_List_API();
