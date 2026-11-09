<?php
/**
 * Title: Single Product Details
 * Slug: orlyn/single-product-details
 * Categories: orlyn-product
 *
 * @package orlyn
 */

?>
<!-- wp:group {"metadata":{"name":"Single Product Details"},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"section-background","textColor":"foreground","fontSize":"normal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-foreground-color has-section-background-background-color has-text-color has-background has-link-color has-normal-font-size"
	style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40);font-style:normal;font-weight:400">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:woocommerce/product-details {"align":"full","className":"is-style-minimal"} -->
			<div class="wp-block-woocommerce-product-details alignfull is-style-minimal"></div>
			<!-- /wp:woocommerce/product-details -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:group {"metadata":{"name":"Faq"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0px"},"blockGap":"0px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide has-background-background-color has-background"
				style="margin-top:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
				<h3 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--10)">
					<?php echo esc_html__( 'Got Questons ?', 'orlyn' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:accordion {"autoclose":true,"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}}} -->
				<div role="group" class="wp-block-accordion" style="margin-top:0;margin-bottom:0">
					<!-- wp:accordion-item {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}}} -->
					<div class="wp-block-accordion-item" style="margin-top:0;margin-bottom:0">
						<!-- wp:accordion-heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"0","right":"0"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"top":{"color":"var:preset|color|background-secondary","width":"1px"},"right":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|background-secondary","width":"1px"},"left":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"background","textColor":"foreground","fontSize":"normal"} -->
						<h3 class="wp-block-accordion-heading has-foreground-color has-background-background-color has-text-color has-background has-link-color has-normal-font-size"
							style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-color:var(--wp--preset--color--background-secondary);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--background-secondary);border-bottom-width:1px;border-left-style:none;border-left-width:0px;font-style:normal;font-weight:500">
							<button type="button" class="wp-block-accordion-heading__toggle"
								style="padding-top:12px;padding-right:0;padding-bottom:12px;padding-left:0"><span
									class="wp-block-accordion-heading__toggle-title"><?php echo esc_html__( 'What services do you offer?', 'orlyn' ); ?></span><span
									class="wp-block-accordion-heading__toggle-icon"
									aria-hidden="true"><?php echo esc_html__( '+', 'orlyn' ); ?></span></button>
						</h3>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
						<div role="region" class="wp-block-accordion-panel"
							style="padding-top:var(--wp--preset--spacing--10);padding-right:0;padding-bottom:var(--wp--preset--spacing--10);padding-left:0">
							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text"} -->
							<p class="has-body-text-color has-text-color has-link-color">
								<?php echo esc_html__( 'You can track your order status by logging into your account on our website and visiting the My Orders section. There, you will find real-time updates on your current and past orders. You may also use the tracking link provided in your order confirmation email for detailed shipment updates.', 'orlyn' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:accordion-panel -->
					</div>
					<!-- /wp:accordion-item -->

					<!-- wp:accordion-item {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}}} -->
					<div class="wp-block-accordion-item" style="margin-top:0;margin-bottom:0">
						<!-- wp:accordion-heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"0","right":"0"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"top":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"right":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|background-secondary","width":"1px"},"left":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"background","textColor":"foreground","fontSize":"normal"} -->
						<h3 class="wp-block-accordion-heading has-foreground-color has-background-background-color has-text-color has-background has-link-color has-normal-font-size"
							style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--background-secondary);border-bottom-width:1px;border-left-style:none;border-left-width:0px;font-style:normal;font-weight:500">
							<button type="button" class="wp-block-accordion-heading__toggle"
								style="padding-top:12px;padding-right:0;padding-bottom:12px;padding-left:0"><span
									class="wp-block-accordion-heading__toggle-title"><?php echo esc_html__( 'Can I change or cancel my order?', 'orlyn' ); ?></span><span
									class="wp-block-accordion-heading__toggle-icon"
									aria-hidden="true"><?php echo esc_html__( '+', 'orlyn' ); ?></span></button>
						</h3>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
						<div role="region" class="wp-block-accordion-panel"
							style="padding-top:var(--wp--preset--spacing--10);padding-right:0;padding-bottom:var(--wp--preset--spacing--10);padding-left:0">
							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text"} -->
							<p class="has-body-text-color has-text-color has-link-color">
								<?php echo esc_html__( 'Yes, you can change or cancel your order, but it depends on the order status and store policy. In most cases, orders can be canceled from your account before they are processed or shipped.', 'orlyn' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:accordion-panel -->
					</div>
					<!-- /wp:accordion-item -->

					<!-- wp:accordion-item {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}}} -->
					<div class="wp-block-accordion-item" style="margin-top:0;margin-bottom:0">
						<!-- wp:accordion-heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"0","right":"0"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"top":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"right":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|background-secondary","width":"1px"},"left":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"background","textColor":"foreground","fontSize":"normal"} -->
						<h3 class="wp-block-accordion-heading has-foreground-color has-background-background-color has-text-color has-background has-link-color has-normal-font-size"
							style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--background-secondary);border-bottom-width:1px;border-left-style:none;border-left-width:0px;font-style:normal;font-weight:500">
							<button type="button" class="wp-block-accordion-heading__toggle"
								style="padding-top:12px;padding-right:0;padding-bottom:12px;padding-left:0"><span
									class="wp-block-accordion-heading__toggle-title"><?php echo esc_html__( 'Can I order as a guest?', 'orlyn' ); ?></span><span
									class="wp-block-accordion-heading__toggle-icon"
									aria-hidden="true"><?php echo esc_html__( '+', 'orlyn' ); ?></span></button>
						</h3>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
						<div role="region" class="wp-block-accordion-panel"
							style="padding-top:var(--wp--preset--spacing--10);padding-right:0;padding-bottom:var(--wp--preset--spacing--10);padding-left:0">
							<!-- wp:paragraph -->
							<p><?php echo esc_html__( 'Yes, you can place an order as a guest without creating an account. Simply proceed to checkout and fill in your billing and shipping details. However, creating an account allows you to track orders and manage your purchases easily.', 'orlyn' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:accordion-panel -->
					</div>
					<!-- /wp:accordion-item -->

					<!-- wp:accordion-item {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}}} -->
					<div class="wp-block-accordion-item" style="margin-top:0;margin-bottom:0">
						<!-- wp:accordion-heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"0","right":"0"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"top":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"right":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|background-secondary","width":"1px"},"left":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"background","textColor":"foreground","fontSize":"normal"} -->
						<h3 class="wp-block-accordion-heading has-foreground-color has-background-background-color has-text-color has-background has-link-color has-normal-font-size"
							style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--background-secondary);border-bottom-width:1px;border-left-style:none;border-left-width:0px;font-style:normal;font-weight:500">
							<button type="button" class="wp-block-accordion-heading__toggle"
								style="padding-top:12px;padding-right:0;padding-bottom:12px;padding-left:0"><span
									class="wp-block-accordion-heading__toggle-title"><?php echo esc_html__( 'What is your return or exchange policy?', 'orlyn' ); ?></span><span
									class="wp-block-accordion-heading__toggle-icon"
									aria-hidden="true"><?php echo esc_html__( '+', 'orlyn' ); ?></span></button>
						</h3>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
						<div role="region" class="wp-block-accordion-panel"
							style="padding-top:var(--wp--preset--spacing--10);padding-right:0;padding-bottom:var(--wp--preset--spacing--10);padding-left:0">
							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text"} -->
							<p class="has-body-text-color has-text-color has-link-color">
								<?php echo esc_html__( 'You can track your order status by logging into your account on our website and visiting the My Orders section. There, you will find real-time updates on your current and past orders. You may also use the tracking link provided in your order confirmation email for detailed shipment updates.', 'orlyn' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:accordion-panel -->
					</div>
					<!-- /wp:accordion-item -->

					<!-- wp:accordion-item {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}}} -->
					<div class="wp-block-accordion-item" style="margin-top:0;margin-bottom:0">
						<!-- wp:accordion-heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"0","right":"0"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"top":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"right":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|background-secondary","width":"1px"},"left":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"background","textColor":"foreground","fontSize":"normal"} -->
						<h3 class="wp-block-accordion-heading has-foreground-color has-background-background-color has-text-color has-background has-link-color has-normal-font-size"
							style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--background-secondary);border-bottom-width:1px;border-left-style:none;border-left-width:0px;font-style:normal;font-weight:500">
							<button type="button" class="wp-block-accordion-heading__toggle"
								style="padding-top:12px;padding-right:0;padding-bottom:12px;padding-left:0"><span
									class="wp-block-accordion-heading__toggle-title"><?php echo esc_html__( 'How long does shipping take?', 'orlyn' ); ?></span><span
									class="wp-block-accordion-heading__toggle-icon"
									aria-hidden="true"><?php echo esc_html__( '+', 'orlyn' ); ?></span></button>
						</h3>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
						<div role="region" class="wp-block-accordion-panel"
							style="padding-top:var(--wp--preset--spacing--10);padding-right:0;padding-bottom:var(--wp--preset--spacing--10);padding-left:0">
							<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text"} -->
							<p class="has-body-text-color has-text-color has-link-color">
								<?php echo esc_html__( 'Shipping times vary depending on your location. Orders are typically processed within a short timeframe, and delivery estimates are provided at checkout for your convenience.', 'orlyn' ); ?>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:accordion-panel -->
					</div>
					<!-- /wp:accordion-item -->
				</div>
				<!-- /wp:accordion -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
