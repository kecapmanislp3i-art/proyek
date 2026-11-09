<?php
/**
 * Title: Special Product Details
 * Slug: orlyn/special-product-details
 * Categories: orlyn-product
 *
 * @package orlyn
 */

?>
<!-- wp:group {"metadata":{"name":"Sticky Parallax Blocks Item"},"align":"full","className":"sticky-parallax-blocks-item","style":{"position":{"type":""},"dimensions":{"minHeight":"100dvh"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull sticky-parallax-blocks-item has-background-background-color has-background"
	style="min-height:100dvh;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:group {"metadata":{"name":"Special Product Details","patternName":"orlyn/special-product-details","categories":["orlyn-product"]},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"
		style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide"><!-- wp:woocommerce/single-product {"productId":21,"align":"full"} -->
			<div class="wp-block-woocommerce-single-product alignfull woocommerce">
				<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
				<div class="wp-block-columns"
					style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
					<!-- wp:column {"width":"60%","layout":{"type":"default"}} -->
					<div class="wp-block-column" style="flex-basis:60%">
						<!-- wp:woocommerce/product-gallery {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
						<div class="wp-block-woocommerce-product-gallery wc-block-product-gallery">
							<!-- wp:woocommerce/product-gallery-thumbnails {"aspectRatio":"auto"} /-->

							<!-- wp:woocommerce/product-gallery-large-image -->
							<div
								class="wp-block-woocommerce-product-gallery-large-image wc-block-product-gallery-large-image__inner-blocks">
								<!-- wp:woocommerce/product-image {"showProductLink":false,"showSaleBadge":false,"isDescendentOfSingleProductBlock":true} /-->

								<!-- wp:woocommerce/product-sale-badge {"align":"right"} /-->

								<!-- wp:woocommerce/product-gallery-large-image-next-previous -->
								<div class="wp-block-woocommerce-product-gallery-large-image-next-previous"></div>
								<!-- /wp:woocommerce/product-gallery-large-image-next-previous -->
							</div>
							<!-- /wp:woocommerce/product-gallery-large-image -->
						</div>
						<!-- /wp:woocommerce/product-gallery -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
						<!-- wp:post-title {"isLink":true,"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

						<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductBlock":true,"textColor":"luminous-vivid-orange","style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-orange"}}},"spacing":{"margin":{"top":"10px","bottom":"10px","left":"0","right":"0"}}}} /-->

						<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductBlock":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

						<!-- wp:woocommerce/product-summary {"isDescendentOfSingleProductBlock":true,"summaryLength":15,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

						<!-- wp:woocommerce/add-to-cart-with-options /-->

						<!-- wp:woocommerce/product-meta -->
						<div class="wp-block-woocommerce-product-meta">
							<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group"
								style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
								<!-- wp:woocommerce/product-sku /-->

								<!-- wp:post-terms {"term":"product_cat","prefix":"<?php echo esc_attr__('Category: ', 'orlyn'); ?>","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

								<!-- wp:post-terms {"term":"product_tag","prefix":"<?php echo esc_attr__('Tags: ', 'orlyn'); ?>"} /-->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:woocommerce/product-meta -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:woocommerce/single-product -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->