<?php
/**
 * Title: Search Template
 * Slug: health-bridge/template-search
 * Categories: hb-theme-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"1px","right":"1px"}}},"backgroundColor":"custom-hb-primary-light","layout":{"type":"constrained"},"metadata":{"name":"Single Page Header"}} -->
<div class="wp-block-group has-custom-hb-primary-light-background-color has-background" style="padding-top:7rem;padding-right:1px;padding-bottom:7rem;padding-left:1px"><!-- wp:query-title {"type":"search","textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-text-dark"}}}},"textColor":"custom-hb-text-dark","fontSize":"hb-xl"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:5rem;padding-bottom:5rem"><!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-small"},"margin":{"bottom":"var:preset|spacing|small"},"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--xx-small)"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary"},":hover":{"color":{"text":"var:preset|color|custom-hb-text-light"}}}}},"className":"is-style-swt-post-terms-pill","fontSize":"x-small"} /-->

<!-- wp:post-title {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"textColor":"custom-hb-secondary","fontSize":"hb-xl"} /-->

<!-- wp:post-excerpt {"style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php echo esc_html__( 'Sorry, but nothing matched your search terms. Try another search?', 'health-bridge' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"is-style-swt-search-minimal"} /-->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
