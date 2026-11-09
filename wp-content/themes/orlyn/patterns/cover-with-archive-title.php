<?php
/**
 * Title: Archive Title
 * Slug: orlyn/cover-with-archive-title
 * Categories: orlyn
 *
 * @package orlyn
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/main-banner.jpg,","id":4644,"dimRatio":30,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"px","isDark":false,"sizeSlug":"full","metadata":{"name":"Post Title","patternName":"orlyn/cover-with-post-title","categories":["orlyn"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-background-color has-text-color has-link-color"
	style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30);min-height:100px">
	<img class="wp-block-cover__image-background wp-image-4644 size-full" alt=""
		src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/main-banner.jpg"
		data-object-fit=" cover" /><span aria-hidden="true"
		class="wp-block-cover__background has-foreground-background-color has-background-dim-30 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group alignwide"><!-- wp:query-title {"type":"archive","fontSize":"medium"} /-->

			<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignfull has-background-color has-text-color has-link-color"
				style="padding-top:0;padding-right:0;padding-left:0">
				<!-- wp:woocommerce/breadcrumbs {"textColor":"background","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|foreground"}},"color":{"text":"var:preset|color|background"}}}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->