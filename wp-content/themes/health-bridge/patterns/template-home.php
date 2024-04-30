<?php
/**
 * Title: Home Template
 * Slug: health-bridge/template-home
 * Categories: hb-theme-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"1px","right":"1px"}}},"backgroundColor":"custom-hb-primary-light","layout":{"type":"constrained"},"metadata":{"name":"Single Page Header"}} -->
<div class="wp-block-group has-custom-hb-primary-light-background-color has-background" style="padding-top:7rem;padding-right:1px;padding-bottom:7rem;padding-left:1px"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"custom-hb-primary","fontSize":"hb-xxl"} -->
<h2 class="wp-block-heading has-custom-hb-primary-color has-text-color has-link-color has-hb-xxl-font-size" style="font-style:normal;font-weight:500">Latest Posts</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"1rem","right":"1rem"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:5rem;padding-right:1rem;padding-bottom:5rem;padding-left:1rem"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":14,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"5rem"}}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"className":"archive-content","layout":{"type":"constrained"},"metadata":{"name":""}} -->
<div class="wp-block-group archive-content"><!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary"},":hover":{"color":{"text":"var:preset|color|custom-hb-text-light"}}}}},"fontSize":"hb-lg"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-text-dark"}}}},"textColor":"custom-hb-text-dark","fontSize":"hb-base"} -->
<p class="has-custom-hb-text-dark-color has-text-color has-link-color has-hb-base-font-size"><?php echo esc_html__( 'Published On: ', 'health-bridge' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"isLink":true,"style":{"typography":{"textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary"},":hover":{"color":{"text":"var:preset|color|custom-hb-text-light"}}}}}} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-text-dark"}}}},"textColor":"custom-hb-text-dark","fontSize":"hb-base"} -->
<p class="has-custom-hb-text-dark-color has-text-color has-link-color has-hb-base-font-size"><?php echo esc_html__( 'Posted by: ', 'health-bridge' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary"},":hover":{"color":{"text":"var:preset|color|custom-hb-text-light"}}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-text-light"}}}},"textColor":"custom-hb-text-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-hb-text-light-color has-text-color has-link-color"><!-- wp:post-excerpt {"excerptLength":100,"fontSize":"hb-base"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","theme":"health-bridge","tagName":"aside"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->