<?php
/**
 * Non-JS fallback markup for the plugin notice bar — currently unused
 * (see index.php's admin_plugin_notice()); kept in case a future
 * non-JS render path is needed.
 *
 * @package orlyn
 */

if ( ! current_user_can( 'edit_theme_options' ) ) {
	return false;
}

$theme = wp_get_theme();

$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_gutenify-starter-info' === $screen->base ) {
	return false;
}

$gutenify_is_installed = file_exists( WP_PLUGIN_DIR . '/gutenify/gutenify.php' );
/**
 * Filters the list of active plugin basenames — WP core's own filter,
 * applied here (not a plain get_option() call) so any plugin/mu-plugin
 * that reports itself active a different way is still accounted for.
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

?>
<div class="notice notice-success is-dismissible gutenify-starter-admin-notice">
	<div class="gutenify-starter-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Hey, Thank you for installing ', 'orlyn' ); ?> <?php echo esc_attr( $theme->get( 'Name' ) ); ?> <?php esc_html_e( 'Theme!', 'orlyn' ); ?></h2>
		<p><?php esc_html_e( 'We recommend installing plugin: ', 'orlyn' ); ?> <strong><?php esc_html_e( 'Gutenify', 'orlyn' ); ?></strong></p>
		<p><strong><?php esc_html_e( 'Gutenify', 'orlyn' ); ?></strong> <?php esc_html_e( 'provides multiple site demo and add advance features to your site.', 'orlyn' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=gutenify-theme-info' ) ); ?>" class="gutenify-starter-admin-notice-primary-button"><?php esc_html_e( 'Get Site Demo', 'orlyn' ); ?></a>
		<a href="<?php echo esc_url( 'https://gutenify.com' ); ?>" target="_blank"><?php esc_html_e( 'Learn more about Gutenify', 'orlyn' ); ?></a>
	</div>
</div>
<?php
