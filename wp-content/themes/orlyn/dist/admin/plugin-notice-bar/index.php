<?php
/**
 * Admin notice recommending the companion Gutenify plugin, dismissible
 * per-user.
 *
 * @package orlyn
 */

namespace ORLYN;

/**
 * Renders and dismisses the "install our other plugin" notice bar.
 */
class Plugin_Notice_Bar {
	/**
	 * Shared script/style handle for this notice's registered assets.
	 *
	 * @var string
	 */
	public static $asset_handle = 'orlyn-plugin-notice-bar';

	/**
	 * Hooks asset registration, the notice render, and its dismiss action.
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'register_assets' ) );
		add_action( 'admin_notices', array( __CLASS__, 'admin_plugin_notice' ) );
		add_action( 'wp_ajax_orlyn_hide_theme_info_noticebar', array( __CLASS__, 'hide_theme_info_noticebar' ) );
	}

	/**
	 * Registers and localizes the notice bar's script and style.
	 */
	public static function register_assets() {
		$assets    = include 'index.asset.php';
		$base_path = get_template_directory_uri() . '/dist/admin/plugin-notice-bar/';

		// Register theme stylesheet.
		$theme         = wp_get_theme();
		$theme_version = $theme->get( 'Version' );

		$version      = ! empty( $assets['version'] ) ? $assets['version'] : $theme_version;
		$dependencies = ! empty( $assets['dependencies'] ) ? $assets['dependencies'] : false;

		$rtl = is_rtl() ? '-rtl' : '';
		wp_register_style(
			self::$asset_handle,
			$base_path . '/index' . $rtl . '.css',
			array(),
			$version
		);

		wp_register_script(
			self::$asset_handle,
			$base_path . '/index.js',
			$dependencies,
			$version,
			true
		);

		wp_localize_script(
			self::$asset_handle,
			'orlyn_vars',
			array(
				'gutenify_demo_importer' => esc_url( admin_url( 'admin.php?page=gutenify-demo-importer' ) ),
				'orlyn_nonce'            => wp_create_nonce( 'orlyn-nonce' ),
				'theme_name'             => $theme->get( 'Name' ),
				'theme_info_url'         => esc_url( admin_url( 'themes.php?page=gutenify-theme-info' ) ),
			)
		);
	}

	/**
	 * Renders the notice bar, unless already dismissed, the current user
	 * can't act on it, or Gutenify is already installed and active.
	 */
	public static function admin_plugin_notice() {
		if ( ! current_user_can( 'edit_theme_options' ) ) {
			return false;
		}

		$hide_notice_bar = get_user_meta( get_current_user_id(), self::$asset_handle . '-hide', true );
		if ( '1' !== $hide_notice_bar ) {
			$screen = get_current_screen();
			if ( ! empty( $screen->base ) && 'appearance_page_gutenify-theme-info' === $screen->base ) {
				return false;
			}

			$gutenify_is_installed = file_exists( WP_PLUGIN_DIR . '/gutenify/gutenify.php' );
			/**
			 * Filters the list of active plugin basenames — WP core's own
			 * filter, applied here (not a plain get_option() call) so any
			 * plugin/mu-plugin that reports itself active a different way
			 * (network-activated, filtered visibility, etc.) is still
			 * accounted for.
			 *
			 * @since Orlyn 1.0
			 *
			 * @param array $active_plugins Active plugin basenames.
			 */
			$gutenify_is_active = in_array( 'gutenify/gutenify.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ), true );

			$show_notice = ! ( $gutenify_is_installed && $gutenify_is_active );

			if ( ! $show_notice ) {
				return false;
			}

			wp_enqueue_style( self::$asset_handle );
			wp_enqueue_script( self::$asset_handle );
			echo '<div class="notice notice-success is-dismissible gutenify-starter-admin-notice" id="gutenify-theme-notice-bar"></div>';
			// templates/admin-plugin-notice.php is currently unused — the notice is rendered entirely by index.js instead. Kept for potential future non-JS fallback.
		}
	}

	/**
	 * AJAX handler: persists this user's dismissal of the notice bar.
	 */
	public static function hide_theme_info_noticebar() {
		check_ajax_referer( 'orlyn-nonce', 'orlyn-nonce-name' );
		if ( ! current_user_can( 'edit_theme_options' ) ) {
			wp_die( -1 );
		}

		update_user_meta( get_current_user_id(), self::$asset_handle . '-hide', 1 );

		wp_die( 1 );
	}
}


new Plugin_Notice_Bar();
