<?php
/**
 * Title: Single Template
 * Slug: health-bridge/template-single
 * Categories: hb-theme-patterns
 */
?>
<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"className":"has-custom-hb-primary-light-background-color has-background"} -->
<div class="wp-block-group has-custom-hb-primary-light-background-color has-background" style="padding-top:5rem;padding-bottom:5rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"textColor":"custom-hb-primary"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary"},":hover":{"color":{"text":"var:preset|color|custom-hb-text-dark"}}}}}} /-->

<!-- wp:post-date {"format":"M j, Y","isLink":true,"style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|custom-hb-text-dark"}},"color":{"text":"var:preset|color|custom-hb-primary"}}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|custom-hb-text-dark"}},"color":{"text":"var:preset|color|custom-hb-primary"}}},"typography":{"textTransform":"capitalize"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"1rem","right":"1rem"},"blockGap":{"left":"2rem"}}}} -->
<div class="wp-block-columns" style="padding-top:5rem;padding-right:1rem;padding-bottom:5rem;padding-left:1rem"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image /-->

<!-- wp:post-content /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-text-light"}}}},"textColor":"custom-hb-text-light"} -->
<p class="has-custom-hb-text-light-color has-text-color has-link-color"><strong>Tags: </strong></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group -->

<!-- wp:post-author {"showBio":true,"isLink":true,"linkTarget":"_blank","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary"}}}},"textColor":"custom-hb-primary","fontSize":"hb-base"} /-->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title /-->

<!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","theme":"health-bridge","tagName":"aside"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->