<?php
/**
 * Title: Last Products
 * Slug: orlyn/latest-products
 * Categories: orlyn-product
 *
 * @package orlyn
 */

?>
<!-- wp:group {"metadata":{"name":"Last Products","categories":["orlyn-product"],"patternName":"orlyn/latest-products"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"
    style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"bottom":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="padding-bottom:0">
        <!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"timeFrame":{"operator":"not-in","value":"-1 day"},"filterable":false,"relatedBy":{"categories":true,"tags":true},"taxonomy":"product_cat"},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"align":"full"} -->
        <div class="wp-block-woocommerce-product-collection alignfull">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"style":{"typography":{"fontWeight":"500","lineHeight":"1.3","letterSpacing":"-0.5px","fontStyle":"normal","textTransform":"capitalize"},"spacing":{"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"medium","fontFamily":"playfair-display"} -->
                <h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-playfair-display-font-family has-medium-font-size"
                    style="margin-top:0;font-style:normal;font-weight:500;letter-spacing:-0.5px;line-height:1.3;text-transform:capitalize">
                    <em><?php echo esc_html__('New Arrivals', 'orlyn'); ?></em>
                </h2>
                <!-- /wp:heading -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"textColor":"foreground","className":"is-style-outline","style":{"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"},"bottom":{"width":"1px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"x-small"} -->
                    <div class="wp-block-button is-style-outline"><a
                            class="wp-block-button__link has-foreground-color has-text-color has-link-color has-x-small-font-size has-custom-font-size wp-element-button"
                            href="/gutenify-store-base-pro/shop/"
                            style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__('EXPLORE
                            ALL', 'orlyn'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->

            <!-- wp:woocommerce/product-template -->
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
                <!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"6px","top":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize","textAlign":"left"}},"fontSize":"product-title","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

                <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"luminous-vivid-orange","style":{"spacing":{"margin":{"top":"-6px","bottom":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-orange"}}},"typography":{"fontSize":"0.85rem"}}} /-->

                <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"foreground","fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:woocommerce/product-template -->
        </div>
        <!-- /wp:woocommerce/product-collection -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->