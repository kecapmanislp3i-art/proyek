<?php
/**
 * Registers the theme's wp-admin "About"/getting-started page.
 *
 * @package orlyn
 */

namespace ORLYN;

require_once 'class-rest-api.php';

/**
 * Renders the About page and registers its assets.
 */
class About_Page {
	/**
	 * Shared script/style handle for this page's registered assets.
	 *
	 * @var string
	 */
	public static $asset_handle = 'orlyn-admin-about-page';

	/**
	 * Hooks asset registration and the admin menu entry.
	 */
	public function __construct() {
		add_action( 'init', array( __CLASS__, 'register_assets' ) );
		add_action( 'admin_menu', array( __CLASS__, 'admin_menu' ) );
	}

	/**
	 * Registers and localizes the About page's script and style.
	 */
	public static function register_assets() {
		$assets    = include 'index.asset.php';
		$base_path = get_template_directory_uri() . '/dist/admin/about-page/';

		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version      = ! empty( $assets['version'] ) ? $assets['version'] : $theme_version;
		$dependencies = ! empty( $assets['dependencies'] ) ? $assets['dependencies'] : false;

		$rtl = is_rtl() ? '-rtl' : '';
		wp_register_style(
			self::$asset_handle,
			$base_path . '/index' . $rtl . '.css',
			array( 'wp-components' ),
			$version
		);

		wp_register_script(
			self::$asset_handle,
			$base_path . 'index.js',
			$dependencies,
			$version,
			true
		);

		$theme = wp_get_theme();
		wp_localize_script(
			self::$asset_handle,
			'orlyn_vars',
			array(
				'gutenify_demo_importer' => esc_url( admin_url( 'admin.php?page=gutenify-demo-importer' ) ),
				// Baked at sync time from package.json's gtfy.features (or the framework default list) — see sync-to-theme.sh.
				'features'               => array(
					array(
						'icon'  => 'dashicons-layout',
						'title' => __( 'Full Site Editing', 'orlyn' ),
						'text'  => __( 'Every template, header, and footer is editable in the block editor. No code required.', 'orlyn' ),
					),
					array(
						'icon'  => 'dashicons-cart',
						'title' => __( 'WooCommerce Ready', 'orlyn' ),
						'text'  => __( 'Purpose-built templates for the shop, product, cart, and checkout pages.', 'orlyn' ),
					),
					array(
						'icon'  => 'dashicons-screenoptions',
						'title' => __( 'Block Patterns', 'orlyn' ),
						'text'  => __( 'Ready-made sections: heroes, banners, product grids, footers, and more.', 'orlyn' ),
					),
					array(
						'icon'  => 'dashicons-smartphone',
						'title' => __( 'Responsive Design', 'orlyn' ),
						'text'  => __( 'Layouts adapt to phones, tablets, and desktops out of the box.', 'orlyn' ),
					),
					array(
						'icon'  => 'dashicons-editor-textcolor',
						'title' => __( 'Self-Hosted Fonts', 'orlyn' ),
						'text'  => __( 'Google Fonts are bundled and served locally for speed and privacy.', 'orlyn' ),
					),
					array(
						'icon'  => 'dashicons-translation',
						'title' => __( 'RTL Support', 'orlyn' ),
						'text'  => __( 'Right-to-left languages are supported out of the box.', 'orlyn' ),
					),
				),
				// Baked at sync time from gtfy.demoListWithoutPlugin (default true; a free/wordpress.org theme sets false).
				'standalone_demo_list'   => false,
				'orlyn_nonce'            => wp_create_nonce( 'orlyn-nonce' ),
				'theme_name'             => $theme->get( 'Name' ),
				'theme_version'          => $theme->get( 'Version' ),
				'theme_info_url'         => esc_url( admin_url( 'themes.php?page=gutenify-theme-info' ) ),
				'is_gutenify_installed'  => file_exists( WP_PLUGIN_DIR . '/gutenify' ),
				'is_gutenify_active'     => defined( 'GUTENIFY_VERSION' ) && function_exists( 'gutenify' ),
			)
		);
	}

	/**
	 * Registers the About page under Appearance.
	 *
	 * With Gutenify active, the visible Appearance menu entry deep-links
	 * straight to the plugin's own Demo Importer instead — but the About
	 * page itself stays registered (hidden) at its stable
	 * themes.php?page=gutenify-theme-info URL, because the plugin
	 * notice bar and the rating notice's no-reviewUrl fallback both link
	 * there. remove_submenu_page() only drops the menu entry, not page
	 * access.
	 */
	public static function admin_menu() {
		$hook = add_theme_page( esc_html__( 'Orlyn', 'orlyn' ), esc_html__( 'Orlyn Theme', 'orlyn' ), 'edit_theme_options', 'gutenify-theme-info', array( __CLASS__, 'theme_page_display' ) );

		if ( defined( 'GUTENIFY_VERSION' ) && function_exists( 'gutenify' ) ) {
			remove_submenu_page( 'themes.php', 'gutenify-theme-info' );
			add_theme_page( esc_html__( 'Orlyn', 'orlyn' ), esc_html__( 'Orlyn Theme', 'orlyn' ), 'edit_theme_options', 'admin.php?page=gutenify-demo-importer' );

			// With the submenu entry removed, get_admin_page_title() can no
			// longer resolve a title for the (still reachable) page —
			// admin-header.php then runs strip_tags( null ), which emits a
			// PHP 8.1+ deprecation notice whose output breaks the
			// setcookie() calls that follow ("headers already sent").
			// Supply the title ourselves before admin-header renders.
			if ( $hook ) {
				add_action( 'load-' . $hook, array( __CLASS__, 'set_hidden_page_title' ) );
			}
		}
	}

	/**
	 * Sets the admin <title> for the menu-less About page.
	 */
	public static function set_hidden_page_title() {
		global $title;
		if ( empty( $title ) ) {
			$title = esc_html__( 'Orlyn', 'orlyn' ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited -- intentional: core leaves $title null for a page hidden via remove_submenu_page(), tripping strip_tags( null ) in admin-header.php.
		}
	}

	/**
	 * Display About page
	 */
	public static function theme_page_display() {
		$theme  = wp_get_theme();
		$handle = 'orlyn-admin-about-page';
		wp_enqueue_script( $handle );
		wp_enqueue_style( $handle );
		echo '<div id="gutenify-theme-about-page"></div>';
		// templates/theme-info.php is currently unused — the page is rendered entirely by index.js instead. Kept for potential future non-JS fallback.
	}
}


new About_Page();
