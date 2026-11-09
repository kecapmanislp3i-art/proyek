<?php
/**
  * Title: Header
  * Slug: prespa-commerce/hero-image
  * Categories: prespa-commerce
*/
?>

<!-- wp:group {"align":"full","className":"pattern-hero-ecommerce header-pattern","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull pattern-hero-ecommerce header-pattern" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:columns {"align":"wide","className":"p-animation-text-moveUp"} -->
<div class="wp-block-columns alignwide p-animation-text-moveUp"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"right":"1rem","left":"1rem","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--small);padding-right:1rem;padding-bottom:var(--wp--preset--spacing--small);padding-left:1rem"><!-- wp:paragraph {"style":{"border":{"radius":"0.25rem"},"color":{"text":"#950002"},"elements":{"link":{"color":{"text":"#950002"}}}}} -->
<p class="has-text-color has-link-color" style="border-radius:0.25rem;color:#950002"><strong><a href="#"><span style="text-decoration: underline;"><?php esc_html_e( 'Limited time offer! Enjoy 30% off!', 'prespa-commerce' );?></span></a></strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"0","right":"0"}}},"textColor":"text-primary","fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-primary-color has-text-color has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-right:0;margin-bottom:var(--wp--preset--spacing--small);margin-left:0"><?php esc_html_e( 'Browse through our Large Collection of Fashion & Beauty', 'prespa-commerce' );?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"text-primary"} -->
<p class="has-text-primary-color has-text-color"><?php esc_html_e( 'We offer garment for every color and taste.', 'prespa-commerce' );?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"16px"} -->
<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"1rem"}}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"text-primary","textColor":"white","className":"p-btn-animation-slide-in"} -->
<div class="wp-block-button p-btn-animation-slide-in"><a class="wp-block-button__link has-white-color has-text-primary-background-color has-text-color has-background wp-element-button" href="#"><strong><?php esc_html_e( 'Shop now', 'prespa-commerce' );?></strong></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"text-primary","className":"p-btn-animation-slide-in is-style-outline"} -->
<div class="wp-block-button p-btn-animation-slide-in is-style-outline"><a class="wp-block-button__link has-text-primary-color has-text-color wp-element-button" href="#"><strong><?php esc_html_e( 'View all deals', 'prespa-commerce' );?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":2865,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/img/pc-patterns/woman-red-gown-shape.png" alt="woman-in-a-red-gown" class="wp-image-2865" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->