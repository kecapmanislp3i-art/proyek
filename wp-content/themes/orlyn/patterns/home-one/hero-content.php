<?php
/**
 * Title: Hero Content
 * Slug: orlyn/hero-content
 * Categories: orlyn-hero
 *
 * @package orlyn
 */

?>
<!-- wp:group {"metadata":{"categories":["orlyn-hero"],"patternName":"orlyn/hero-content","name":"Hero Content"},"align":"full","className":"alignfull","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"99.6px"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull"
	style="min-height:99.6px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"
		style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
				<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"
					style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
					<div class="wp-block-column is-vertically-aligned-center"
						style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:45%">
						<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"gray-video","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
						<figure class="wp-block-image aligncenter size-full gray-video"
							style="margin-top:0;margin-bottom:0"><img
								src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-2.jpg"
								alt="" style="aspect-ratio:3/4;object-fit:cover" /></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:image {"aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"gray-video"} -->
						<figure class="wp-block-image aligncenter size-full gray-video"><img
								src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-1.jpg"
								alt="" style="aspect-ratio:2/3;object-fit:cover" /></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p style="margin-top:0;margin-bottom:0"><?php echo esc_html__('Look Book', 'orlyn'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"}},"fontSize":"big"} -->
			<h2 class="wp-block-heading alignwide has-big-font-size"
				style="font-style:normal;font-weight:600;text-transform:capitalize">
				<?php echo esc_html__('Style is not about the clothes, its
				about individual ', 'orlyn'); ?>
			</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__('Sed do eiusmod tempor incididunt ut labore et dolore magna
				aliqua. Quis ipsum suspendisse ultrices
				gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 'orlyn'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:button -->
				<div class="wp-block-button"><a
						class="wp-block-button__link wp-element-button"><?php echo esc_html__('View Collections', 'orlyn'); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->