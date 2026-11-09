<?php
/**
 * Title: 404 Error Page
 * Slug: orlyn/hidden-404
 * Categories: orlyn
 *
 * @package orlyn
 */

?>
<!-- wp:group {"tagName":"main","metadata":{"name":"404 Page"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull has-primary-background-color has-background"
	style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"metadata":{"categories":["orlyn"],"patternName":"orlyn/404","name":"404 Error Page"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group"
	style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"className":"has-text-align-center","style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"200","lineHeight":"1","fontStyle":"normal"}},"textColor":"background"} -->
	<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color"
		style="font-size:clamp(4rem, 40vw, 20rem);font-style:normal;font-weight:200;line-height:1">
		<?php echo esc_html__( '404', 'orlyn' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
	<p class="has-text-align-center has-background-color has-text-color has-link-color">
		<?php echo esc_html__( 'This page could not be found. Maybe try a search?', 'orlyn' ); ?>
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'orlyn' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search Now', 'orlyn' ); ?>","width":75,"widthUnit":"%","buttonText":"<?php echo esc_attr__( 'Search', 'orlyn' ); ?>","buttonUseIcon":true,"align":"center","backgroundColor":"secondary","textColor":"background"} /-->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
