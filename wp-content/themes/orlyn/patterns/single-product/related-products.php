<?php
/**
 * Title: Related Products
 * Slug: orlyn/related-products
 * Categories: orlyn-product
 *
 * @package orlyn
 */

?>
<!-- wp:group {"metadata":{"name":"Related Products","patternName":"orlyn/related-products","categories":["orlyn-product"]},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"
	style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-bottom:0">
		<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/related","hideControls":["inherit"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":true,"previewMessage":"Actual products will vary depending on the product being viewed."},"align":"wide"} -->
		<div class="wp-block-woocommerce-product-collection alignwide">
			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:0">
				<?php echo esc_html__( 'Related Products', 'orlyn' ); ?>
			</h2>
			<!-- /wp:heading -->

			<!-- wp:woocommerce/product-template {"className":"mobile-horizontal-scroll"} -->
			<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"metadata":{"name":"Product Thumb Wrapper"},"className":"product-thumb-wrap","layout":{"type":"constrained"}} -->
			<div class="wp-block-group product-thumb-wrap">
				<!-- wp:woocommerce/product-image {"showSaleBadge":false,"isDescendentOfQueryLoop":true,"className":"image-zoom-hover","style":{"dimensions":{"aspectRatio":"3/4"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<!-- wp:woocommerce/product-sale-badge {"backgroundColor":"foreground","textColor":"background","align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"0.74rem"},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->
				<!-- /wp:woocommerce/product-image -->

				<!-- wp:woocommerce/product-button {"width":100,"isDescendentOfQueryLoop":true,"fontSize":"x-small","style":{"typography":{"textTransform":"uppercase"}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"right":"8px","left":"8px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group" style="padding-right:8px;padding-left:8px">
				<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"6px","top":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"400","textTransform":"capitalize"}},"fontSize":"product-title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

				<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textColor":"luminous-vivid-orange","fontSize":"x-small","style":{"spacing":{"margin":{"top":"-6px","bottom":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-orange"}}}}} /-->

				<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"foreground","fontSize":"x-small","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->
			</div>
			<!-- /wp:group -->
			<!-- /wp:woocommerce/product-template -->
		</div>
		<!-- /wp:woocommerce/product-collection -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
