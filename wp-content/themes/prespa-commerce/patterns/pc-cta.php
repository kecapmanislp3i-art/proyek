<?php
/**
  * Title: Discount Cta
  * Slug: prespa-commerce/cta
  * Categories: prespa-commerce
*/
?>

<!-- wp:group {"align":"full","className":"pattern-cta","backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull pattern-cta has-white-background-color has-background"><!-- wp:columns {"className":"p-animation-down-up"} -->
<div class="wp-block-columns p-animation-down-up"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small","top":"var:preset|spacing|medium","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:0;padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'OUR FEATURED PRODUCTS', 'prespa-commerce' );?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Claim your discount', 'prespa-commerce' );?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Every week we offer limited edition discounts. Claim them while they last!', 'prespa-commerce' );?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"16px"} -->
<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"text-primary","textColor":"white","className":"is-style-fill p-btn-animation-slide-in"} -->
<div class="wp-block-button is-style-fill p-btn-animation-slide-in"><a class="wp-block-button__link has-white-color has-text-primary-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'BROWSE OUR SHOP', 'prespa-commerce' );?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":2897,"scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/pc-patterns/man-woman-dress.png" alt="" class="wp-image-2897" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->