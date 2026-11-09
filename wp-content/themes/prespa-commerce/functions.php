<?php
/**
 * Prespa Commerce functions and definitions
 *
 * @since 1.0.0
 */

/**
 * Register child theme's styles
 */
function prespa_commerce_enqueue_theme_styles() {
	wp_enqueue_style( 'prespa-commerce-styles', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'prespa_commerce_enqueue_theme_styles' );

/**
 * Registers block patterns categories, and type.
 */
function prespa_commerce_register_block_patterns() {
	$block_pattern_categories = array(
		'prespa-commerce' => array( 'label' => esc_html__( 'Prespa Commerce', 'prespa-commerce' ) ),
	);

	$block_pattern_categories = apply_filters( 'prespa_commerce_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'prespa_commerce_register_block_patterns', 9 );

// Change theme defaults in the customizer preview
function prespa_commerce_customize_register( $wp_customize ) {
	$primary_accent_color_setting   = $wp_customize->get_setting( 'primary_accent_color' );
	$secondary_accent_color_setting = $wp_customize->get_setting( 'secondary_accent_color' );
	$body_bgr_color_setting         = $wp_customize->get_setting( 'body_bgr_color' );
	$content_layout_setting         = $wp_customize->get_setting( 'content_layout' );
	$header_button_text             = $wp_customize->get_setting( 'header_button_text' );

	$woo_btn_bgr_color  = $wp_customize->get_setting( 'woo_btn_bgr_color' );
	$woo_btn_text_color = $wp_customize->get_setting( 'woo_btn_text_color' );

	if ( $primary_accent_color_setting ) {
		$primary_accent_color_setting->default = '#404040';
	}

	if ( $body_bgr_color_setting ) {
		$body_bgr_color_setting->default = '#f5f5f5';
	}

	if ( $secondary_accent_color_setting ) {
		$secondary_accent_color_setting->default = '#f5f5f5';
	}

	if ( $header_button_text ) {
		$header_button_text->default = '';
	}

	if ( $woo_btn_bgr_color ) {
		$woo_btn_bgr_color->default = '#404040';
	}

	if ( $woo_btn_text_color ) {
		$woo_btn_text_color->default = '#ffffff';
	}
}

add_action( 'customize_register', 'prespa_commerce_customize_register', 999, 1 );

// Overwrite parent theme customizer defaults
function prespa_customizer_values( $value ) {
	$defaults = array(
		'primary_accent_color'   => '#404040',
		'secondary_accent_color' => '#f5f5f5',
		'body_bgr_color'         => '#f5f5f5',
		'headings_text_color'      => '#404040',
		'link_headings_text_color' => '#404040',
		'content_layout'         => 'seperate_containers',
		'header_button_text'     => '',
		'has_secondary_menu'     => true,
		'header-menu-position'   => 'static',
		'woo_btn_bgr_color'      => '#404040',
		'woo_btn_text_color'     => '#ffffff',
	);
	// Return the value from the theme mod, or fallback to the default
	return get_theme_mod( $value, $defaults[ $value ] );
}

function prespa_starter_content_setup() {
	$default_page_content = '
	<!-- wp:pattern {"slug":"prespa-commerce/hero-image"} /-->
	<!-- wp:pattern {"slug":"prespa-commerce/product-categories"} /-->
	<!-- wp:pattern {"slug":"prespa-commerce/call-to-action"} /-->
	<!-- wp:pattern {"slug":"prespa-commerce/features"} /-->
	<!-- wp:pattern {"slug":"prespa/testimonials"} /-->
	<!-- wp:pattern {"slug":"prespa-commerce/cta"} /-->
	<!-- wp:pattern {"slug":"prespa-commerce/instagram-feed"} /-->
	';

	add_theme_support(
		'starter-content',
		array(
			'posts'     => array(
				'home'  => array(
					'post_type'    => 'page',
					'post_title'   => _x( 'Home', 'Theme starter content', 'prespa-travel' ),
					'post_content' => $default_page_content,
				),
				'blog'
			),
			'options'   => array(
                'show_on_front'  => 'page',
                'page_on_front'  => '{{home}}',
                'page_for_posts' => '{{blog}}'
            ),
			'nav_menus' => array(
                'menu-1' => array(
                    'name'  => __( 'Primary', 'prespa-travel' ),
                    'items' => array(
                        'page_home',
                        'page_blog',
                    ),
                ),
            )
		)
	);
}
