<?php
/**
 * Title: Header 
 * Slug: orlyn/header/header
 * Categories: orlyn-header
 *
 * @package orlyn
 */

?>
<!-- wp:group {"metadata":{"name":"Header Transparent Only Home","patternName":"orlyn/header/header","categories":["orlyn-header"]},"align":"full","className":"up-down-sticky-header header-transparent-only-home-enabled","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|section-background","width":"1px"},"top":[],"right":[],"left":[]}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull up-down-sticky-header has-background-background-color has-background"
	style="border-bottom-color:var(--wp--preset--color--section-background);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:group {"metadata":{"name":"Top Header"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"10px","right":"var:preset|spacing|40","bottom":"10px","left":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"heading","textColor":"background","fontSize":"small","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background-color has-heading-background-color has-text-color has-background has-link-color has-small-font-size"
		style="padding-top:10px;padding-right:var(--wp--preset--spacing--40);padding-bottom:10px;padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:group {"metadata":{"categories":["high-performance","page"],"patternName":"high-performance/text-carousel","name":"Marquee Section"},"align":"full","className":"marquee-section","style":{"border":{"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","layout":{"type":"default"}} -->
		<div class="wp-block-group alignfull marquee-section has-background-color has-text-color has-link-color"
			style="border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-bottom:0">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"13px","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"syne"} -->
			<h3 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-syne-font-family"
				style="font-size:13px;font-style:normal;font-weight:600"><?php echo esc_html__('✨ Get free shipping on orders $89 and  
				up&nbsp;', 'orlyn'); ?><a
					href="#"><?php echo esc_html__('Shop Now ', 'orlyn'); ?></a><?php echo esc_html__('! ✨', 'orlyn'); ?>
			</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]},"position":{"type":""}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull"
		style="border-bottom-style:none;border-bottom-width:0px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:group {"align":"wide","className":"mobile-custom-grid","style":{"spacing":{"padding":{"bottom":"0px","top":"0px","right":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"},"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide mobile-custom-grid"
			style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
			<!-- wp:group {"className":"mobile-logo-area","style":{"spacing":{"blockGap":"10px","padding":{"right":"0","left":"0"}},"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group mobile-logo-area" style="padding-right:0;padding-left:0">
				<!-- wp:group {"className":"gutenify-section-60b1e510-aaf7-11ef-9c4f-4d0d750f5ed1","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group gutenify-section-60b1e510-aaf7-11ef-9c4f-4d0d750f5ed1"
					style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
					<!-- wp:site-logo {"width":30,"shouldSyncIcon":true,"className":"is-style-default","style":{"color":{"duotone":["#000","#ffffff"]}}} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"gutenify-section-60b23330-aaf7-11ef-9c4f-4d0d750f5ed1","style":{"spacing":{"blockGap":"0"}},"fontSize":"tiny","layout":{"type":"constrained"}} -->
				<div class="wp-block-group gutenify-section-60b23330-aaf7-11ef-9c4f-4d0d750f5ed1 has-tiny-font-size">
					<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.5rem","letterSpacing":"0px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontFamily":"cormorant-garamond"} /-->

					<!-- wp:site-tagline /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"mobile-nav-area","layout":{"type":"constrained"}} -->
			<div class="wp-block-group mobile-nav-area">
				<!-- wp:navigation {"style":{"typography":{"fontSize":"0.93rem"}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"mobile-right-area","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group mobile-right-area">
				<!-- wp:group {"metadata":{"name":"Search Bar"},"className":"advance-search","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"10px","right":"10px"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group advance-search"
					style="padding-top:0;padding-right:10px;padding-bottom:0;padding-left:10px">
					<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"metadata":{"name":"Search Button"},"className":"advance-search-button","layout":{"type":"constrained"}} -->
					<div class="wp-block-group advance-search-button"><!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"background":"#ffffff00"}}} -->
							<div class="wp-block-button"><a
									class="wp-block-button__link has-background wp-element-button"
									href="javascript:void(0);"
									style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><img
										class="wp-image-674" style="width: 24px;"
										src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/search.png"
										alt="Search"></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"metadata":{"name":"Search Container"},"className":"advance-search-container","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
					<div class="wp-block-group advance-search-container has-background-background-color has-background"
						style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
						<!-- wp:group {"metadata":{"name":"Close Button"},"align":"wide","className":"close-btn","layout":{"type":"constrained","justifyContent":"right"}} -->
						<div class="wp-block-group alignwide close-btn">
							<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
							<div class="wp-block-buttons">
								<!-- wp:button {"textColor":"background","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} -->
								<div class="wp-block-button"><a
										class="wp-block-button__link has-background-color has-text-color has-background has-link-color wp-element-button"
										href="javascript:void(0);"
										style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><img
											class="wp-image-679" style="width: 24px;"
											src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/x.png"
											alt="Close"></a></div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"className":"search-inner-wrapper","layout":{"type":"constrained","contentSize":"900px"}} -->
						<div class="wp-block-group search-inner-wrapper">
							<!-- wp:search {"label":"Search by keywords","placeholder":"Looking For Something ..","buttonText":"Search","buttonUseIcon":true,"query":{"post_type":"product"},"className":"input-underline-only ","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"medium","namespace":"woocommerce/product-search"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon","textColor":"foreground","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->

				<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","priceColor":{"color":"#000","name":"Foreground","slug":"foreground","class":"has-foreground-icon-color"},"iconColor":{"color":"#000","name":"Foreground","slug":"foreground","class":"has-foreground-icon-color"},"productCountColor":{"color":"#c04246","name":"Primary","slug":"primary","class":"has-primary-product-count-color"},"productCountVisibility":"never","style":{"typography":{"fontSize":"16px"}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->