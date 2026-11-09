<?php
/**
 * Orlyn functions and definitions.
 *
 * Synced from woo-theme-framework/common-functions/functions.php by
 * .dev/sync-to-theme.sh, which substitutes this theme's own slug/title
 * from its package.json in place of the placeholder tokens below. Do
 * not edit this file directly — edit the framework and re-sync. Code
 * unique to this theme (including this theme's own after_setup_theme
 * additions) belongs in inc/theme-functions.php instead, which is
 * never synced from the framework.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package    WordPress
 * @since      Orlyn 1.0
 */

if ( ! function_exists( 'orlyn_common_support' ) ) :
	/**
	 * Theme-setup logic shared by every woo-theme-framework theme.
	 *
	 * The WooCommerce gallery theme-supports here are declared
	 * explicitly even though WooCommerce core currently auto-grants
	 * them to any block theme (`WC_Template_Loader::init()` calls
	 * `add_support_for_product_page_gallery()` whenever
	 * `wp_is_block_theme()` is true, regardless of what the theme
	 * itself declares) — relying on that internal auto-grant instead of
	 * declaring it here would leave every framework theme silently
	 * dependent on a WooCommerce core implementation detail that could
	 * change in a future release.
	 *
	 * @return void
	 */
	function orlyn_common_support() {
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		// Unlocks blocks that Gutenify (the liger-lite-framework consumer
		// plugin) ships in its free/lite tier but keeps gated behind either
		// its own PRO plugin being active OR this flag — e.g. the Popup
		// block. Every woo-theme-framework theme bundles this support, so a
		// site running one of these themes gets those blocks even with only
		// the free Gutenify plugin installed, no Gutenify PRO required. A
		// no-op on any site not running Gutenify at all.
		add_theme_support( 'gutenify-pro-blocks' );

		add_editor_style( array( 'style.css', 'dist/frontend/main-asset/index.css' ) );

		add_filter(
			'woocommerce_get_image_size_thumbnail',
			function ( $size ) {
				return array(
					'width'  => 480,
					'height' => 600,
					'crop'   => 1,
				);
			}
		);
	}
endif;
add_action( 'after_setup_theme', 'orlyn_common_support' );

if ( ! function_exists( 'orlyn_enqueue_assets' ) ) :
	/**
	 * Enqueue the compiled frontend stylesheet, and the compiled
	 * frontend script only if it actually has content.
	 *
	 * A theme whose `src/frontend/main-asset/index.js` only imports
	 * SCSS (no real JS) compiles to a 0-byte file — registering and
	 * enqueuing that would cost a real HTTP request for an empty
	 * response on every page load, for nothing. Checking `filesize()`
	 * here (rather than hardcoding "this theme has JS, that one
	 * doesn't") means a theme can add real JS to that entry later and
	 * this starts enqueuing it automatically, no code change needed.
	 *
	 * @return void
	 */
	function orlyn_enqueue_assets() {
		$main_asset_file   = get_theme_file_path( 'dist/frontend/main-asset/index.asset.php' );
		$main_style_assets = file_exists( $main_asset_file ) ? include $main_asset_file : array();

		$theme_version = wp_get_theme()->get( 'Version' );
		$version       = ! empty( $main_style_assets['version'] ) ? $main_style_assets['version'] : $theme_version;
		$dependencies  = ! empty( $main_style_assets['dependencies'] ) ? $main_style_assets['dependencies'] : false;

		$deps = array();
		global $wp_styles;
		if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue, true ) ) {
			$deps[] = 'wc-blocks-vendors-style';
		}

		$rtl = is_rtl() ? '-rtl' : '';
		wp_register_style(
			'orlyn-style',
			get_template_directory_uri() . '/dist/frontend/main-asset/index' . $rtl . '.css',
			$deps,
			$version
		);
		wp_enqueue_style( 'orlyn-style' );

		$main_script_file = get_theme_file_path( 'dist/frontend/main-asset/index.js' );
		if ( file_exists( $main_script_file ) && filesize( $main_script_file ) > 0 ) {
			wp_register_script(
				'orlyn-script',
				get_template_directory_uri() . '/dist/frontend/main-asset/index.js',
				$dependencies,
				$version,
				true
			);
			wp_enqueue_script( 'orlyn-script' );
		}
	}
endif;
add_action( 'wp_enqueue_scripts', 'orlyn_enqueue_assets' );


if ( ! function_exists( 'orlyn_register_block_patterns' ) ) :
	/**
	 * Registers this theme's block patterns and categories.
	 *
	 * The category list itself is baked in below from this theme's own
	 * package.json "gtfyBlockPatternCategories" object (sync time, not
	 * runtime — package.json never ships in the packaged zip, see the
	 * README's font-pipeline-removal history for why a runtime read
	 * would silently break on every real customer install). Each label
	 * still goes through `__()` so it stays translatable at runtime even
	 * though `wp i18n make-pot` can't auto-discover a value that started
	 * in JSON — a translator would need to add these to the .pot by
	 * hand. Neither theme ships a .pot/.po/.mo today, so that cost is
	 * zero right now.
	 *
	 * @return void
	 */
	function orlyn_register_block_patterns() {
		$block_pattern_categories = array(
			'orlyn-header'             => array( 'label' => __( '1. Orlyn - Header', 'orlyn' ) ),
			'orlyn-footer'             => array( 'label' => __( '2. Orlyn - Footer', 'orlyn' ) ),
			'orlyn-hero'               => array( 'label' => __( '3. Orlyn - Hero', 'orlyn' ) ),
			'orlyn-promotional-banner' => array( 'label' => __( '4. Orlyn - Promotional Banner', 'orlyn' ) ),
			'orlyn-promo-category'     => array( 'label' => __( '5. Orlyn - Promo Category', 'orlyn' ) ),
			'orlyn-product'            => array( 'label' => __( '6. Orlyn - Product', 'orlyn' ) ),
			'orlyn-sidebar'            => array( 'label' => __( '7. Orlyn - Sidebar', 'orlyn' ) ),
			'orlyn-pages'              => array( 'label' => __( '8. Orlyn - Pages', 'orlyn' ) ),
			'orlyn'                    => array( 'label' => __( '9. Orlyn - More', 'orlyn' ) ),
		);

		/**
		 * Filters the theme block pattern categories.
		 *
		 * @since Orlyn 1.0
		 *
		 * @param array[] $block_pattern_categories {
		 *     An associative array of block pattern categories, keyed by category name.
		 *
		 *     @type array[] $properties {
		 *         An array of block category properties.
		 *
		 *         @type string $label A human-readable label for the pattern category.
		 *     }
		 * }
		 */
		$block_pattern_categories = apply_filters( 'orlyn_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}
	}
endif;
add_action( 'init', 'orlyn_register_block_patterns', 9 );

if ( ! function_exists( 'orlyn_exclude_current_product_from_best_sellers' ) ) :

	/**
	 * Prevents the product being viewed from also appearing in the "Best
	 * Seller Products" collection on its own single product page (visible
	 * on stores with a small catalog, where the viewed product also
	 * qualifies as a best seller).
	 *
	 * This is a WooCommerce Blocks quirk, not a theme-specific one — the
	 * Best Seller product-collection block resolves its "popularity"
	 * ordering via a raw SQL join rather than a meta_key query var, so it
	 * can't be fixed via the `render_block_data`/block attributes filter,
	 * only at the WP_Query level, matched by its `orderby=popularity`
	 * query var. Applies to every framework theme, not just the ones that
	 * currently ship a Best Seller pattern — a theme with none today is
	 * still exposed the moment a site owner adds that WooCommerce Blocks
	 * collection type manually, or a future pattern includes it. A no-op
	 * otherwise: the condition below only ever matches that one specific
	 * query.
	 *
	 * @param WP_Query $query The WordPress query instance.
	 * @return void
	 */
	function orlyn_exclude_current_product_from_best_sellers( $query ) {
		if (
			is_singular( 'product' ) &&
			! $query->is_main_query() &&
			'product' === $query->get( 'post_type' ) &&
			'popularity' === $query->get( 'orderby' )
		) {
			$query->set( 'post__not_in', array_merge( $query->get( 'post__not_in', array() ), array( get_queried_object_id() ) ) );
		}
	}
endif;
add_action( 'pre_get_posts', 'orlyn_exclude_current_product_from_best_sellers' );


require_once get_template_directory() . '/dist/admin/about-page/index.php';
require_once get_template_directory() . '/dist/admin/rating-notice/index.php';

// recommended-plugins is opted into per theme (sync-to-theme.sh), not
// yet built into every theme's dist/ — guarded, unlike the two
// requires above, so syncing this in before running build-theme.sh
// doesn't fatal the site in between those two steps. Replaces the old
// plugin-notice-bar module (deleted 2026-09-29) — its Gutenify
// promotion is now just the default first entry this module's own
// list always includes (see sync-to-theme.sh).
$orlyn_recommended_plugins_index = get_template_directory() . '/dist/admin/recommended-plugins/index.php';
if ( file_exists( $orlyn_recommended_plugins_index ) ) {
	require_once $orlyn_recommended_plugins_index;
}

// Orlyn-specific logic — not shared with other framework themes.
$orlyn_theme_functions = get_template_directory() . '/inc/theme-functions.php';
if ( file_exists( $orlyn_theme_functions ) ) {
	require_once $orlyn_theme_functions;
}
