<?php
/**
 * Title: Single Product Gallery
 * Slug: orlyn/single-product-gallery
 * Categories: orlyn-product
 *
 * @package orlyn
 */

?>
<!-- wp:group {"metadata":{"name":"Single Product Gallery","patternName":"orlyn/single-product-gallery","categories":["orlyn-product"]},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"0","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"
	style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)">
	<!-- wp:woocommerce/store-notices /-->

	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
		<!-- wp:woocommerce/single-product {"align":"full"} -->
		<div class="wp-block-woocommerce-single-product alignfull woocommerce">
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"0"}}}} -->
			<div class="wp-block-columns"><!-- wp:column -->
				<div class="wp-block-column"></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"55%"} -->
				<div class="wp-block-column" style="flex-basis:55%"><!-- wp:woocommerce/product-gallery -->
					<div class="wp-block-woocommerce-product-gallery wc-block-product-gallery">
						<!-- wp:woocommerce/product-gallery-thumbnails /-->

						<!-- wp:woocommerce/product-gallery-large-image -->
						<div
							class="wp-block-woocommerce-product-gallery-large-image wc-block-product-gallery-large-image__inner-blocks">
							<!-- wp:woocommerce/product-image {"showProductLink":false,"showSaleBadge":false,"isDescendentOfSingleProductBlock":true} /-->

							<!-- wp:woocommerce/product-sale-badge {"backgroundColor":"foreground","textColor":"background","fontSize":"x-small","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

							<!-- wp:woocommerce/product-gallery-large-image-next-previous -->
							<div class="wp-block-woocommerce-product-gallery-large-image-next-previous"></div>
							<!-- /wp:woocommerce/product-gallery-large-image-next-previous -->
						</div>
						<!-- /wp:woocommerce/product-gallery-large-image -->
					</div>
					<!-- /wp:woocommerce/product-gallery -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"}}} -->
				<div class="wp-block-column is-vertically-aligned-center"
					style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40);flex-basis:45%">
					<!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
					<div class="wp-block-group alignwide">
						<!-- wp:woocommerce/breadcrumbs {"fontSize":"x-small","textColor":"body-text","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"isLink":true,"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

					<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductBlock":true,"textColor":"orange","fontSize":"x-small","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}}} /-->

					<!-- wp:woocommerce/product-summary {"isDescendentOfSingleProductTemplate":true,"isDescendentOfSingleProductBlock":true,"summaryLength":39,"linkText":"Know More","fontSize":"small"} /-->

					<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"isDescendentOfSingleProductBlock":true,"textColor":"foreground","fontSize":"medium","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->

					<!-- wp:woocommerce/add-to-cart-with-options /-->

					<!-- wp:woocommerce/product-meta {"metadata":{"ignoredHookedBlocks":["core/post-terms"]}} -->
					<div class="wp-block-woocommerce-product-meta">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"fontSize":"x-small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group has-x-small-font-size"
							style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
							<!-- wp:woocommerce/product-sku /-->

							<!-- wp:post-terms {"term":"product_cat","prefix":"Category: "} /-->

							<!-- wp:post-terms {"term":"product_tag","prefix":"Tags: "} /-->
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