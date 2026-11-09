<?php
/**
 * Title: Footer
 * Slug: orlyn/footer/footer-default
 * Categories: orlyn-footer
 *
 * @package orlyn
 */

?>
<!-- wp:group {"metadata":{"name":"Footer","patternName":"orlyn/footer/footer-default","categories":["orlyn-footer"]},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"
	style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0px"},"color":{"text":"#999999"},"elements":{"link":{"color":{"text":"#999999"}}},"border":{"top":{"color":"var:preset|color|background-secondary","width":"1px"},"bottom":{"color":"var:preset|color|foreground","width":"1px"},"right":{},"left":{}}},"backgroundColor":"heading","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-heading-background-color has-text-color has-background has-link-color"
		style="border-top-color:var(--wp--preset--color--background-secondary);border-top-width:1px;border-bottom-color:var(--wp--preset--color--foreground);border-bottom-width:1px;color:#999999;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}}} -->
				<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"regular"} -->
						<h2 class="wp-block-heading has-background-color has-text-color has-regular-font-size"
							style="font-style:normal;font-weight:500">
							<?php echo esc_html__('About Store', 'orlyn'); ?>
						</h2>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size">
						<?php echo esc_html__('Lorem ipsum dolor sit amet consecte tur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua tepo the.', 'orlyn'); ?>
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"normal"} -->
						<p class="has-normal-font-size"><?php echo esc_html__('+800 1234 5678 90', 'orlyn'); ?>
						</p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"fontSize":"normal"} -->
						<p class="has-normal-font-size"><?php echo esc_html__('[info@example.com]', 'orlyn'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:social-links {"iconColor":"background","iconColorValue":"#fff","iconBackgroundColor":"foreground","iconBackgroundColorValue":"#2B2322","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}},"border":{"width":"0px","style":"none"}}} -->
					<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default"
						style="border-style:none;border-width:0px">
						<!-- wp:social-link {"url":"#","service":"WordPress"} /-->

						<!-- wp:social-link {"url":"#","service":"facebook"} /-->

						<!-- wp:social-link {"url":"#","service":"instagram"} /-->

						<!-- wp:social-link {"url":"#","service":"tiktok"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"80%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-column" style="flex-basis:80%">
				<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
				<div class="wp-block-columns"><!-- wp:column {"layout":{"type":"default"}} -->
					<div class="wp-block-column">
						<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"padding":{"bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}}} -->
						<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="padding-bottom:0">
							<!-- wp:column {"width":"","style":{"spacing":{"blockGap":"10px","padding":{"top":"0"}}}} -->
							<div class="wp-block-column" style="padding-top:0">
								<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
								<div class="wp-block-group">
									<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"regular"} -->
									<h2 class="wp-block-heading has-background-color has-text-color has-regular-font-size"
										style="font-style:normal;font-weight:500">
										<?php echo esc_html__('Information', 'orlyn'); ?>
									</h2>
									<!-- /wp:heading -->
								</div>
								<!-- /wp:group -->

								<!-- wp:list {"className":"list-style-none ","style":{"typography":{"lineHeight":"2.2"}},"fontSize":"small"} -->
								<ul style="line-height:2.2" class="wp-block-list list-style-none has-small-font-size">
									<!-- wp:list-item -->
									<li>
										<a href="#"><?php echo esc_html__('About Us', 'orlyn'); ?></a>
									</li>
									<!-- /wp:list-item -->

									<!-- wp:list-item -->
									<li>
										<a href="#"><?php echo esc_html__('Contact Us', 'orlyn'); ?></a>
									</li>
									<!-- /wp:list-item -->

									<!-- wp:list-item -->
									<li>
										<a href="#"><?php echo esc_html__('Terms & Conditions', 'orlyn'); ?></a>
									</li>
									<!-- /wp:list-item -->

									<!-- wp:list-item -->
									<li>
										<a href="#"><?php echo esc_html__('Returns & Exchanges', 'orlyn'); ?></a>
									</li>
									<!-- /wp:list-item -->

									<!-- wp:list-item -->
									<li>
										<a href="#"><?php echo esc_html__('Shipping &amp; Delivery', 'orlyn'); ?></a>
									</li>
									<!-- /wp:list-item -->

									<!-- wp:list-item -->
									<li>
										<a href="#"><?php echo esc_html__('Privacy Policy', 'orlyn'); ?></a>
									</li>
									<!-- /wp:list-item -->
								</ul>
								<!-- /wp:list -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {"width":"","style":{"spacing":{"blockGap":"10px","padding":{"top":"0px"}}}} -->
							<div class="wp-block-column" style="padding-top:0px">
								<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
								<div class="wp-block-group">
									<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"regular"} -->
									<h2 class="wp-block-heading has-background-color has-text-color has-regular-font-size"
										style="font-style:normal;font-weight:500">
										Important Links<?php echo esc_html__('', 'orlyn'); ?> </h2>
									<!-- /wp:heading -->
								</div>
								<!-- /wp:group -->

								<!-- wp:list {"className":"list-style-none ","style":{"typography":{"lineHeight":"2.2"}},"fontSize":"small"} -->
								<ul style="line-height:2.2" class="wp-block-list list-style-none has-small-font-size">
									<!-- wp:list-item -->
									<li>
										<a href="#"><?php echo esc_html__('Our Teams', 'orlyn'); ?></a>
									</li>
									<!-- /wp:list-item -->

									<!-- wp:list-item -->
									<li>
										<a href="#"><?php echo esc_html__('Testimonials', 'orlyn'); ?></a>
									</li>
									<!-- /wp:list-item -->

									<!-- wp:list-item -->
									<li>
										<a href="#"><?php echo esc_html__('Our Brands', 'orlyn'); ?></a>
									</li>
									<!-- /wp:list-item -->

									<!-- wp:list-item -->
									<li>
										<a href="#"><?php echo esc_html__('Our Branch', 'orlyn'); ?></a>
									</li>
									<!-- /wp:list-item -->

									<!-- wp:list-item -->
									<li>
										<a href="#"><?php echo esc_html__('Store Locations', 'orlyn'); ?></a>
									</li>
									<!-- /wp:list-item -->

									<!-- wp:list-item -->
									<li>
										<a href="#"><?php echo esc_html__('Orders Tracking', 'orlyn'); ?></a>
									</li>
									<!-- /wp:list-item -->
								</ul>
								<!-- /wp:list -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"padding":{"bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|20"}}}} -->
						<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="padding-bottom:0">
							<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px"},"blockGap":"10px"}}} -->
							<div class="wp-block-column" style="padding-top:0px">
								<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
								<div class="wp-block-group">
									<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"regular"} -->
									<h2 class="wp-block-heading has-background-color has-text-color has-regular-font-size"
										style="font-style:normal;font-weight:500">
										Quick Links<?php echo esc_html__('', 'orlyn'); ?> </h2>
									<!-- /wp:heading -->
								</div>
								<!-- /wp:group -->

								<!-- wp:group {"style":{"spacing":{"padding":{"top":"0"}}},"layout":{"type":"constrained"}} -->
								<div class="wp-block-group" style="padding-top:0">
									<!-- wp:list {"className":"list-style-none ","style":{"typography":{"lineHeight":"2.2"}},"fontSize":"small"} -->
									<ul style="line-height:2.2"
										class="wp-block-list list-style-none has-small-font-size"><!-- wp:list-item -->
										<li>
											<a href="#"><?php echo esc_html__('Store Location', 'orlyn'); ?></a>
										</li>
										<!-- /wp:list-item -->

										<!-- wp:list-item -->
										<li>
											<a href="#"><?php echo esc_html__('My Account', 'orlyn'); ?></a>
										</li>
										<!-- /wp:list-item -->

										<!-- wp:list-item -->
										<li>
											<a href="#"><?php echo esc_html__('Accessories', 'orlyn'); ?></a>
										</li>
										<!-- /wp:list-item -->

										<!-- wp:list-item -->
										<li>
											<a href="#"><?php echo esc_html__('Orders Tracking', 'orlyn'); ?></a>
										</li>
										<!-- /wp:list-item -->

										<!-- wp:list-item -->
										<li>
											<a href="#"><?php echo esc_html__('FAQs', 'orlyn'); ?></a>
										</li>
										<!-- /wp:list-item -->

										<!-- wp:list-item -->
										<li>
											<a href="#"><?php echo esc_html__('Contact', 'orlyn'); ?></a>
										</li>
										<!-- /wp:list-item -->
									</ul>
									<!-- /wp:list -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {"width":"","style":{"spacing":{"blockGap":"10px","padding":{"top":"0px"}}}} -->
							<div class="wp-block-column" style="padding-top:0px">
								<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
								<div class="wp-block-group">
									<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"regular"} -->
									<h2 class="wp-block-heading has-background-color has-text-color has-regular-font-size"
										style="font-style:normal;font-weight:500">
										<?php echo esc_html__('Categories', 'orlyn'); ?>
									</h2>
									<!-- /wp:heading -->
								</div>
								<!-- /wp:group -->

								<!-- wp:woocommerce/product-categories {"style":{"typography":{"lineHeight":"2.2"}},"fontSize":"small"} /-->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"mobile-aligncenter","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|background"}},"color":{"text":"#cac3c3"}}},"color":{"text":"#cac3c3"},"border":{"width":"0px","style":"none"}},"backgroundColor":"heading","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull mobile-aligncenter has-heading-background-color has-text-color has-background has-link-color"
		style="border-style:none;border-width:0px;color:#cac3c3;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"align":"wide","className":"footer-heading","style":{"elements":{"link":{"color":{"text":"#353232"}}},"color":{"text":"#353232"},"typography":{"textTransform":"capitalize"}},"fitText":true} -->
		<h2 class="wp-block-heading alignwide footer-heading has-fit-text has-text-color has-link-color"
			style="color:#353232;text-transform:capitalize"><?php echo esc_html__('orlyn Store', 'orlyn'); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|40","bottom":"var:preset|spacing|10","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background"
		style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:group {"align":"wide","className":"mobile-aligncenter gutenify-section-3b986c70-15df-11ef-85a4-2310ff452cfd","style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"},"blockGap":"var:preset|spacing|30"},"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide mobile-aligncenter gutenify-section-3b986c70-15df-11ef-85a4-2310ff452cfd"
			style="border-top-style:none;border-top-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:paragraph {"style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|foreground"}},"color":{"text":"var:preset|color|section-background"}}},"typography":{"textAlign":"center"}},"textColor":"section-background","fontSize":"x-small"} -->
			<p
				class="has-text-align-center has-section-background-color has-text-color has-link-color has-x-small-font-size">
				<?php echo esc_html__('Proudly powered by', 'orlyn'); ?> <a
					href="<?php echo esc_url(__('https://gutenify.com', 'orlyn')); ?>" target="_blank"
					rel="noreferrer noopener"><?php echo esc_html__('Gutenify', 'orlyn'); ?></a>
				<?php echo esc_html__('and', 'orlyn'); ?> <a
					href="<?php echo esc_url(__('https://wordpress.org', 'orlyn')); ?>" target="_blank"
					rel="nofollow noopener"><?php echo esc_html__('WordPress', 'orlyn'); ?></a>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"id":1085,"width":"411px","height":"20px","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
			<figure class="wp-block-image size-full is-resized"><img
					src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/payment-methods.png"
					alt="Payment Methods" class="wp-image-1085" style="width:411px;height:20px" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->