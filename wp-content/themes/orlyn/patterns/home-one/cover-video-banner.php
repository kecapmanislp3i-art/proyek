<?php
/**
 * Title: Video Cover Banner
 * Slug: orlyn/cover-video-banner
 * Categories: orlyn
 *
 * @package orlyn
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/main-banner.jpg","id":4644,"dimRatio":20,"isUserOverlayColor":true,"focalPoint":{"x":0.66,"y":0.06},"minHeightUnit":"vh","customGradient":"linear-gradient(75deg,rgba(255,255,255,0.55) 24%,rgba(0,0,0,0.2) 60%)","contentPosition":"center center","isDark":false,"sizeSlug":"full","metadata":{"name":"Video Cover Banner","patternName":"orlyn/cover-video-banner","categories":["orlyn"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|30","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-cover alignfull is-light"
	style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
	<img class="wp-block-cover__image-background wp-image-4644 size-full" alt=""
		src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/main-banner.jpg"
		style="object-position:66% 6%" data-object-fit="cover" data-object-position="66% 6%" /><span aria-hidden="true"
		class="wp-block-cover__background has-background-dim-20 has-background-dim wp-block-cover__gradient-background has-background-gradient"
		style="background:linear-gradient(75deg,rgba(255,255,255,0.55) 24%,rgba(0,0,0,0.2) 60%)"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide"
			style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:group {"align":"wide","className":"gutenify-section-329e25b0-aa77-11ef-8fd4-e91825962fdc","style":{"spacing":{"blockGap":"0px","padding":{"right":"0","left":"0px","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide gutenify-section-329e25b0-aa77-11ef-8fd4-e91825962fdc"
				style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0px">
				<!-- wp:heading {"level":4,"align":"wide","style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"400","letterSpacing":"0px","textAlign":"left"},"spacing":{"margin":{"bottom":"0","top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"regular"} -->
				<h4 class="wp-block-heading has-text-align-left alignwide has-foreground-color has-text-color has-link-color has-regular-font-size"
					style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;letter-spacing:0px;line-height:1.3">
					<?php echo esc_html__('Summer 2026 ', 'orlyn'); ?>
				</h4>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","contentSize":"60%","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10","top":"var:preset|spacing|10","right":"0"}},"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"400","textAlign":"left","lineHeight":"1.2"}},"fontSize":"extra-huge"} -->
					<h2 class="wp-block-heading has-text-align-left has-extra-huge-font-size"
						style="margin-top:var(--wp--preset--spacing--10);margin-right:0;margin-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:400;line-height:1.2;text-transform:capitalize">
						<?php echo esc_html__('New Fashion Collection', 'orlyn'); ?>
					</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"fontSize":"normal","layout":{"type":"constrained","contentSize":"500px","justifyContent":"left"}} -->
				<div class="wp-block-group has-normal-font-size">
					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"},"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|10"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
					<div class="wp-block-buttons"
						style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- wp:button {"backgroundColor":"secondary","className":"gutenify-section-329b6690-aa77-11ef-8fd4-e91825962fdc is-style-fill"} -->
						<div
							class="wp-block-button gutenify-section-329b6690-aa77-11ef-8fd4-e91825962fdc is-style-fill">
							<a
								class="wp-block-button__link has-secondary-background-color has-background wp-element-button"><?php echo esc_html__('Shop
								Now', 'orlyn'); ?></a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->