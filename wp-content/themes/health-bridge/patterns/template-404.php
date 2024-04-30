<?php
/**
 * Title: 404 Template
 * Slug: health-bridge/template-404
 * Categories: hb-theme-patterns
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"1rem","right":"1rem"}},"dimensions":{"minHeight":"100vh"}},"backgroundColor":"custom-hb-text-light","className":"single-header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<main class="wp-block-group single-header has-custom-hb-text-light-background-color has-background" style="min-height:100vh;padding-top:5rem;padding-right:1rem;padding-bottom:5rem;padding-left:1rem"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary-light"}}}},"textColor":"custom-hb-primary-light","fontSize":"hb-xxl"} /-->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary-light"}}}},"textColor":"custom-hb-primary-light","className":"has-text-align-center","fontSize":"hb-xxxl"} -->
<h2 class="wp-block-heading has-text-align-center has-custom-hb-primary-light-color has-text-color has-link-color has-hb-xxxl-font-size" style="font-style:normal;font-weight:700">
<?php echo esc_html__( '404', 'health-bridge' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary-light"}}}},"textColor":"custom-hb-primary-light","fontSize":"hb-md"} -->
<p class="has-text-align-center has-custom-hb-primary-light-color has-text-color has-link-color has-hb-md-font-size"><?php echo esc_html__( 'This page could not be found. Maybe try a search?', 'health-bridge' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"border":{"width":"0.2rem","color":"#fb923c","radius":"5px"}},"fontSize":"hb-md"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->