<?php
/**
  * Title: Call to Action
  * Slug: prespa-commerce/call-to-action
  * Categories: prespa-commerce
*/
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/pc-patterns/fashion-show.jpg","id":3049,"alt":"fashion show","hasParallax":true,"dimRatio":70,"overlayColor":"text-primary","isUserOverlayColor":true,"align":"full","style":{"spacing":{"margin":{"bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="margin-bottom:0"><span aria-hidden="true" class="wp-block-cover__background has-text-primary-background-color has-background-dim-70 has-background-dim"></span><div role="img" aria-label="fashion show" class="wp-block-cover__image-background wp-image-3049 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/pc-patterns/fashion-show.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"center","className":"p-animation-text-transform","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center p-animation-text-transform has-large-font-size"><?php esc_html_e( 'Browse Our New Collection', 'prespa-commerce');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"p-animation-text-transform"} -->
<p class="has-text-align-center p-animation-text-transform"><?php esc_html_e( 'Shop the new collection of high quality dresses and stock up on your favorite pieces.', 'prespa-commerce' );?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","className":"p-btn-animation-slide-in","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}}} -->
<div class="wp-block-button p-btn-animation-slide-in"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color wp-element-button" href="#"><?php esc_html_e( 'Shop now', 'prespa-commerce');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"white","textColor":"black","className":"p-btn-animation-slide-in","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}}} -->
<div class="wp-block-button p-btn-animation-slide-in"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color wp-element-button" href="#"><?php esc_html_e( 'View more', 'prespa-commerce');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->