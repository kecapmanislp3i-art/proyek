<?php
/**
 * Admin notice recommending plugins declared in package.json
 * (gtfy.recommendedPlugins) plus the framework's own default Gutenify
 * entry (baked in at sync time, see sync-to-theme.sh — this replaces
 * the old standalone plugin-notice-bar module, folded in here so
 * there's one recommended-plugins notice instead of two overlapping
 * ones), each with a one-click install/activate button. Shows nothing
 * once every recommended plugin is active, or once the current user
 * has dismissed it (7-day snooze, see dismiss() below).
 *
 * @package orlyn
 */

namespace ORLYN;

/**
 * Renders the recommended-plugins notice and its install button.
 */
class Recommended_Plugins {
	/**
	 * Shared script/style handle for this notice's registered assets,
	 * and the base for its dismiss-snooze user-meta key.
	 *
	 * @var string
	 */
	public static $asset_handle = 'orlyn-recommended-plugins';

	/**
	 * How long a dismissal hides the notice for its current user
	 * before it's eligible to reappear.
	 *
	 * @var int
	 */
	const DISMISS_DURATION = 7 * DAY_IN_SECONDS;

	/**
	 * Hooks asset registration, the notice render, and its dismiss
	 * action.
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'register_assets' ) );
		add_action( 'admin_notices', array( __CLASS__, 'admin_notice' ) );
		add_action( 'wp_ajax_orlyn_dismiss_recommended_plugins', array( __CLASS__, 'dismiss' ) );
	}

	/**
	 * Baked at sync time from package.json's gtfy.recommendedPlugins —
	 * see sync-to-theme.sh. Each entry: slug (wordpress.org slug), file
	 * (main plugin file basename, without .php, defaults to slug), name,
	 * reason.
	 *
	 * @return array[]
	 */
	private static function get_recommended_plugins() {
		return array(
			array(
				'slug'   => 'gutenify',
				'file'   => 'gutenify',
				'name'   => __( 'Gutenify', 'orlyn' ),
				'reason' => __( 'Unlocks free, ready-made site demos and extra blocks built for this theme.', 'orlyn' ),
			),
			array(
				'slug'   => 'woocommerce',
				'file'   => 'woocommerce',
				'name'   => __( 'WooCommerce', 'orlyn' ),
				'reason' => __( 'Powers the shop, product, cart, and checkout templates this theme ships.', 'orlyn' ),
			),
			array(
				'slug'   => 'gutenify-mega-menu',
				'file'   => 'gutenify-mega-menu',
				'name'   => __( 'Gutenify Mega Menu', 'orlyn' ),
				'reason' => __( 'Adds mega menu layouts for this theme\'s navigation.', 'orlyn' ),
			),
		);
	}

	/**
	 * Whether the current user snoozed this notice within the last
	 * DISMISS_DURATION.
	 *
	 * @return bool
	 */
	private static function is_dismissed() {
		$dismissed_until = (int) get_user_meta( get_current_user_id(), self::$asset_handle . '-dismissed-until', true );
		return $dismissed_until > time();
	}

	/**
	 * The configured plugins that aren't active yet, for the current
	 * user. Empty for anyone without the install_plugins capability
	 * (they can't act on the notice, so it stays hidden for them) or
	 * anyone who snoozed it within the last 7 days.
	 *
	 * @return array[]
	 */
	private static function pending_plugins() {
		if ( ! current_user_can( 'install_plugins' ) || self::is_dismissed() ) {
			return array();
		}

		if ( ! function_exists( 'get_plugins' ) ) {
			require_once ABSPATH . 'wp-admin/includes/plugin.php';
		}

		$installed_plugins = get_plugins();
		$pending           = array();

		foreach ( self::get_recommended_plugins() as $plugin ) {
			if ( empty( $plugin['slug'] ) ) {
				continue;
			}

			$file                  = ! empty( $plugin['file'] ) ? $plugin['file'] : $plugin['slug'];
			$plugin['plugin_file'] = $file . '/' . $file . '.php';

			if ( is_plugin_active( $plugin['plugin_file'] ) ) {
				continue;
			}

			$plugin['installed'] = isset( $installed_plugins[ $plugin['plugin_file'] ] );
			$pending[]           = $plugin;
		}

		return $pending;
	}

	/**
	 * Registers and localizes the notice's script and style.
	 */
	public static function register_assets() {
		$pending = self::pending_plugins();
		if ( empty( $pending ) ) {
			return;
		}

		$assets    = include 'index.asset.php';
		$base_path = get_template_directory_uri() . '/dist/admin/recommended-plugins/';

		$theme         = wp_get_theme();
		$theme_version = $theme->get( 'Version' );

		$version      = ! empty( $assets['version'] ) ? $assets['version'] : $theme_version;
		$dependencies = ! empty( $assets['dependencies'] ) ? $assets['dependencies'] : false;

		$rtl = is_rtl() ? '-rtl' : '';
		wp_register_style(
			self::$asset_handle,
			$base_path . 'index' . $rtl . '.css',
			array(),
			$version
		);

		wp_register_script(
			self::$asset_handle,
			$base_path . 'index.js',
			$dependencies,
			$version,
			true
		);

		wp_localize_script(
			self::$asset_handle,
			'orlyn_recommended_plugins_vars',
			array(
				'plugins'       => array_map(
					function ( $plugin ) {
						return array(
							'slug'        => $plugin['slug'],
							'plugin_file' => $plugin['plugin_file'],
							'installed'   => $plugin['installed'],
							'name'        => $plugin['name'],
							'reason'      => isset( $plugin['reason'] ) ? $plugin['reason'] : '',
						);
					},
					$pending
				),
				'theme_name'    => $theme->get( 'Name' ),
				'dismiss_nonce' => wp_create_nonce( 'orlyn-recommended-plugins-nonce' ),
			)
		);
	}

	/**
	 * Renders the notice container, unless there's nothing pending for
	 * the current user.
	 */
	public static function admin_notice() {
		$pending = self::pending_plugins();
		if ( empty( $pending ) ) {
			return;
		}

		wp_enqueue_style( self::$asset_handle );
		wp_enqueue_script( self::$asset_handle );
		echo '<div class="notice notice-warning" id="orlyn_recommended_plugins_notice"></div>';
	}

	/**
	 * AJAX handler: snoozes the notice for the current user for
	 * DISMISS_DURATION.
	 */
	public static function dismiss() {
		check_ajax_referer( 'orlyn-recommended-plugins-nonce', 'nonce' );

		if ( ! current_user_can( 'install_plugins' ) ) {
			wp_die( -1 );
		}

		update_user_meta( get_current_user_id(), self::$asset_handle . '-dismissed-until', time() + self::DISMISS_DURATION );

		wp_die( 1 );
	}
}


new Recommended_Plugins();
