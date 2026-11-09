<?php
/**
 * Title: Sidebar
 * Slug: orlyn/sidebar
 * Categories: orlyn-sidebar
 *
 * @package orlyn
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"0"},"border":{"width":"0px","style":"none"},"shadow":"var:preset|shadow|naturala-circle-two","position":{"type":"sticky","top":"0px"}},"backgroundColor":"section-background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-section-background-background-color has-background"
	style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);box-shadow:var(--wp--preset--shadow--naturala-circle-two)">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0px","margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-group"
	style="margin-bottom:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:heading {"level":2,"align":"wide","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"10px","left":"0"},"padding":{"left":"0"}},"typography":{"lineHeight":"1"}},"textColor":"foreground","fontSize":"content-heading"} -->
	<h2 class="wp-block-heading alignwide has-foreground-color has-text-color has-content-heading-font-size"
		style="margin-top:0px;margin-right:0px;margin-bottom:10px;margin-left:0;padding-left:0;line-height:1">
		<?php echo esc_html__( 'Recent Categories', 'orlyn' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:categories {"fontSize":"normal"} /-->
	</div>
	<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0px","margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
	<div class="wp-block-group"
	style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:heading {"level":2,"align":"wide","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"var:preset|spacing|10","left":"0"},"padding":{"left":"0px"}},"typography":{"lineHeight":"1.2"}},"textColor":"foreground"} -->
	<h2 class="wp-block-heading alignwide has-foreground-color has-text-color"
		style="margin-top:0px;margin-right:0px;margin-bottom:var(--wp--preset--spacing--10);margin-left:0;padding-left:0px;line-height:1.2">
		<?php echo esc_html__( 'Recent Posts', 'orlyn' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"
		style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:latest-posts {"excerptLength":10,"displayAuthor":true,"displayPostDate":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.6"}},"fontSize":"normal"} /-->
	</div>
	<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-group"
	style="margin-bottom:var(--wp--preset--spacing--20);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:heading {"level":2,"align":"wide","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"10px","left":"0"},"padding":{"left":"0"}},"typography":{"lineHeight":"1.2"}},"textColor":"foreground","fontSize":"content-heading"} -->
	<h2 class="wp-block-heading alignwide has-foreground-color has-text-color has-content-heading-font-size"
		style="margin-top:0px;margin-right:0px;margin-bottom:10px;margin-left:0;padding-left:0;line-height:1.2">
		<?php echo esc_html__( 'Post Archive', 'orlyn' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:group -->
		<div class="wp-block-group"><!-- wp:archives {"fontSize":"normal"} /--></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"bottom":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-group"
	style="margin-bottom:var(--wp--preset--spacing--20);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:heading {"level":2,"align":"wide","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"10px","left":"0"},"padding":{"left":"0"}},"typography":{"lineHeight":"1.3"}},"textColor":"foreground","fontSize":"content-heading"} -->
	<h2 class="wp-block-heading alignwide has-foreground-color has-text-color has-content-heading-font-size"
		style="margin-top:0px;margin-right:0px;margin-bottom:10px;margin-left:0;padding-left:0;line-height:1.3">
		<?php echo esc_html__( 'Category Tags', 'orlyn' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:tag-cloud /-->
	</div>
	<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:heading {"level":2,"align":"wide","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"var:preset|spacing|10","left":"0"},"padding":{"left":"0"}},"typography":{"lineHeight":"1.3"}},"textColor":"foreground","fontSize":"content-heading"} -->
	<h2 class="wp-block-heading alignwide has-foreground-color has-text-color has-content-heading-font-size"
		style="margin-top:0px;margin-right:0px;margin-bottom:var(--wp--preset--spacing--10);margin-left:0;padding-left:0;line-height:1.3">
		<?php echo esc_html__( 'Follow Us', 'orlyn' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
		<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000","iconBackgroundColor":"background-secondary","iconBackgroundColorValue":"#f4f4f4","openInNewTab":true,"size":"has-small-icon-size","className":"is-style-pill-shape","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","justifyContent":"left"}} -->
		<ul
			class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-pill-shape">
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		</ul>
		<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
