<?php
/**
 * Prompts the admin for a marketplace rating once the theme has been
 * active for 7+ days, dismissible forever or snoozable for another 7
 * days.
 *
 * @package orlyn
 */

namespace ORLYN;

/**
 * Renders and dismisses the "rate us" admin notice.
 */
class Rating_Notice {
	/**
	 * Shared script/style handle for this notice's registered assets.
	 *
	 * @var string
	 */
	public static $asset_handle = 'orlyn-rating-notice';

	/**
	 * Option name storing when this theme was first detected active.
	 *
	 * @var string
	 */
	const ACTIVATED_AT_OPTION = 'orlyn_activated_at';

	/**
	 * User meta key storing this notice's dismissal state — 'forever',
	 * or a Unix timestamp to snooze until.
	 *
	 * @var string
	 */
	const DISMISSED_META_KEY = 'orlyn_rating_notice_dismissed';

	/**
	 * Hooks activation tracking, the notice render, and its dismiss action.
	 */
	public function __construct() {
		add_action( 'after_switch_theme', array( __CLASS__, 'record_activation' ) );
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'register_assets' ) );
		add_action( 'admin_notices', array( __CLASS__, 'admin_rating_notice' ) );
		add_action( 'wp_ajax_orlyn_dismiss_rating_notice', array( __CLASS__, 'dismiss_rating_notice' ) );
	}

	/**
	 * Records when this theme became active — the 7-day threshold below
	 * counts from this. Only fires on an actual theme switch; see
	 * get_activated_at() for the fallback covering a theme that was
	 * already active before this feature shipped.
	 */
	public static function record_activation() {
		update_option( self::ACTIVATED_AT_OPTION, time() );
	}

	/**
	 * Returns the activation timestamp, lazily initializing it to "now"
	 * the first time this runs if it was never recorded — covers a
	 * theme already active before this feature existed, where
	 * after_switch_theme never fired for it. This means the 7-day
	 * countdown for an existing install starts from whenever this code
	 * first runs, not the theme's real original activation date — an
	 * accepted, documented approximation; there's no reliable way to
	 * recover the true original date after the fact.
	 *
	 * @return int Unix timestamp.
	 */
	private static function get_activated_at() {
		$activated_at = get_option( self::ACTIVATED_AT_OPTION );
		if ( ! $activated_at ) {
			$activated_at = time();
			update_option( self::ACTIVATED_AT_OPTION, $activated_at );
		}
		return (int) $activated_at;
	}

	/**
	 * Whether the notice should currently be shown to this user.
	 *
	 * @return bool
	 */
	private static function should_show() {
		if ( ! current_user_can( 'edit_theme_options' ) ) {
			return false;
		}

		if ( ( time() - self::get_activated_at() ) < 7 * DAY_IN_SECONDS ) {
			return false;
		}

		$dismissed = get_user_meta( get_current_user_id(), self::DISMISSED_META_KEY, true );
		if ( 'forever' === $dismissed ) {
			return false;
		}
		if ( is_numeric( $dismissed ) && time() < (int) $dismissed ) {
			return false;
		}

		return true;
	}

	/**
	 * Registers and localizes the rating notice's script and style —
	 * only when it will actually be shown, so the asset doesn't ship on
	 * every admin page load regardless of relevance.
	 */
	public static function register_assets() {
		if ( ! self::should_show() ) {
			return;
		}

		$assets    = include 'index.asset.php';
		$base_path = get_template_directory_uri() . '/dist/admin/rating-notice/';

		$theme_version = wp_get_theme()->get( 'Version' );

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

		$theme = wp_get_theme();
		// comes from this theme's own package.json
		// ("gtfyReviewUrl") — substituted at sync time, same mechanism
		// as orlyn etc. Falls back to the About page when
		// unset (a new/unlisted theme, or one whose real marketplace
		// review URL hasn't been confirmed yet) rather than linking
		// somewhere guessed and possibly dead — see the README's
		// "gtfyReviewUrl" section for why this is a per-theme config
		// field instead of a computed URL pattern.
		$review_url = '';
		// Dead branch for a theme whose gtfyReviewUrl IS set (like this one,
		// post-sync) - live logic for a theme without one, see comment above.
		// @phpstan-ignore-next-line.
		if ( empty( $review_url ) ) {
			$review_url = esc_url( admin_url( 'themes.php?page=gutenify-theme-info' ) );
		}

		wp_localize_script(
			self::$asset_handle,
			'orlyn_rating_vars',
			array(
				'theme_name' => $theme->get( 'Name' ),
				'review_url' => $review_url,
				'nonce'      => wp_create_nonce( 'orlyn-rating-nonce' ),
			)
		);
	}

	/**
	 * Renders the notice mount point, if it should currently show.
	 */
	public static function admin_rating_notice() {
		if ( ! self::should_show() ) {
			return;
		}

		wp_enqueue_style( self::$asset_handle );
		wp_enqueue_script( self::$asset_handle );
		echo '<div class="notice notice-info theme-rating-notice" id="orlyn_rating_notice"></div>';
	}

	/**
	 * AJAX handler: persists this user's rating-notice dismissal —
	 * 'forever', or a 7-day snooze for anything else.
	 */
	public static function dismiss_rating_notice() {
		check_ajax_referer( 'orlyn-rating-nonce', 'orlyn-rating-nonce-name' );
		if ( ! current_user_can( 'edit_theme_options' ) ) {
			wp_die( -1 );
		}

		$type  = isset( $_GET['type'] ) ? sanitize_key( wp_unslash( $_GET['type'] ) ) : '';
		$value = 'forever' === $type ? 'forever' : ( time() + 7 * DAY_IN_SECONDS );

		update_user_meta( get_current_user_id(), self::DISMISSED_META_KEY, $value );

		wp_die( 1 );
	}
}

new Rating_Notice();
