<?php
/**
 * Title: Product Sidebar
 * Slug: orlyn/product-sidebar
 * Categories: orlyn-sidebar
 *
 * @package orlyn
 */

?>
<!-- wp:group {"metadata":{"patternName":"orlyn/product-sidebar","name":"Product Sidebar","categories":["orlyn-sidebar"]},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"position":{"type":"sticky","top":"0px"}},"backgroundColor":"section-background","textColor":"foreground","fontSize":"normal","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-foreground-color has-section-background-background-color has-text-color has-background has-link-color has-normal-font-size"
	style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
	<!-- wp:group {"className":"gutenify-section-d9cdea00-4375-11ef-be1a-95524cff0400","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group gutenify-section-d9cdea00-4375-11ef-be1a-95524cff0400"
		style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:woocommerce/product-filters -->
		<div class="wp-block-woocommerce-product-filters wc-block-product-filters">
			<!-- wp:heading {"style":{"margin":{"top":"0","bottom":"0"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"regular"} -->
			<h2 class="wp-block-heading has-regular-font-size" style="margin-top:0;margin-bottom:0">
				Filters </h2>
			<!-- /wp:heading -->

			<!-- wp:woocommerce/product-filter-price -->
			<div class="wp-block-woocommerce-product-filter-price">
				<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}}},"fontSize":"regular"} -->
				<h2 class="wp-block-heading has-regular-font-size" style="margin-top:0;margin-bottom:0.625rem">
					Price </h2>
				<!-- /wp:heading -->

				<!-- wp:woocommerce/product-filter-price-slider {"sliderHandle":"secondary","customSliderHandle":"#b5643f","sliderHandleBorder":"secondary","customSliderHandleBorder":"#b5643f","slider":"background-secondary","customSlider":"#e2e2e2"} -->
				<div class="wp-block-woocommerce-product-filter-price-slider wc-block-product-filter-price-slider has-slider-handle-color has-slider-handle-border-color has-slider-color"
					style="--wc-product-filter-price-slider-handle:var(--wp--preset--color--secondary);--wc-product-filter-price-slider-handle-border:var(--wp--preset--color--secondary);--wc-product-filter-price-slider:var(--wp--preset--color--background-secondary)">
				</div>
				<!-- /wp:woocommerce/product-filter-price-slider -->
			</div>
			<!-- /wp:woocommerce/product-filter-price -->

			<!-- wp:woocommerce/product-filter-active -->
			<div class="wp-block-woocommerce-product-filter-active">
				<!-- wp:woocommerce/product-filter-removable-chips -->
				<div
					class="wp-block-woocommerce-product-filter-removable-chips wc-block-product-filter-removable-chips">
				</div>
				<!-- /wp:woocommerce/product-filter-removable-chips -->

				<!-- wp:woocommerce/product-filter-clear-button -->
				<!-- wp:buttons {"layout":{"type":"flex","verticalAlignment":"stretched"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"wc-block-product-filter-clear-button is-style-outline","style":{"border":{"width":"1px"},"typography":{"textDecoration":"none","textAlign":"center"},"outline":"none","fontSize":"medium","spacing":{"padding":{"left":"8px","right":"8px","top":"5px","bottom":"5px"}},"dimensions":{"width":"100%"}}} -->
					<div class="wp-block-button wc-block-product-filter-clear-button is-style-outline"><a
							class="wp-block-button__link has-text-align-center wp-element-button"
							style="border-width:1px;padding-top:5px;padding-right:8px;padding-bottom:5px;padding-left:8px;text-decoration:none">Clear
							filters</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
				<!-- /wp:woocommerce/product-filter-clear-button -->
			</div>
			<!-- /wp:woocommerce/product-filter-active -->

			<!-- wp:woocommerce/product-filter-rating -->
			<div class="wp-block-woocommerce-product-filter-rating">
				<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}}},"fontSize":"regular"} -->
				<h2 class="wp-block-heading has-regular-font-size" style="margin-top:0;margin-bottom:0.625rem">
					Rating </h2>
				<!-- /wp:heading -->

				<!-- wp:woocommerce/product-filter-checkbox-list -->
				<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list">
				</div>
				<!-- /wp:woocommerce/product-filter-checkbox-list -->
			</div>
			<!-- /wp:woocommerce/product-filter-rating -->

			<!-- wp:woocommerce/product-filter-attribute -->
			<div class="wp-block-woocommerce-product-filter-attribute">
				<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}}},"fontSize":"regular"} -->
				<h2 class="wp-block-heading has-regular-font-size" style="margin-top:0;margin-bottom:0.625rem">
					Color </h2>
				<!-- /wp:heading -->

				<!-- wp:woocommerce/product-filter-checkbox-list -->
				<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list">
				</div>
				<!-- /wp:woocommerce/product-filter-checkbox-list -->
			</div>
			<!-- /wp:woocommerce/product-filter-attribute -->

			<!-- wp:woocommerce/product-filter-taxonomy -->
			<div class="wp-block-woocommerce-product-filter-taxonomy">
				<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}}},"fontSize":"regular"} -->
				<h2 class="wp-block-heading has-regular-font-size" style="margin-top:0;margin-bottom:0.625rem">
					Category </h2>
				<!-- /wp:heading -->

				<!-- wp:woocommerce/product-filter-checkbox-list -->
				<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list">
				</div>
				<!-- /wp:woocommerce/product-filter-checkbox-list -->
			</div>
			<!-- /wp:woocommerce/product-filter-taxonomy -->

			<!-- wp:woocommerce/product-filter-status -->
			<div class="wp-block-woocommerce-product-filter-status">
				<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}}},"fontSize":"regular"} -->
				<h2 class="wp-block-heading has-regular-font-size" style="margin-top:0;margin-bottom:0.625rem">
					Status </h2>
				<!-- /wp:heading -->

				<!-- wp:woocommerce/product-filter-checkbox-list -->
				<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list">
				</div>
				<!-- /wp:woocommerce/product-filter-checkbox-list -->
			</div>
			<!-- /wp:woocommerce/product-filter-status -->
		</div>
		<!-- /wp:woocommerce/product-filters -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->