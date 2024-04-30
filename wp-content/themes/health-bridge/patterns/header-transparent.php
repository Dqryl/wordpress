<?php
/**
 * Title: Transparent Header
 * Slug: health-bridge/header-transparent
 * Categories: header
 */
?>
<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1rem","right":"1rem"}}},"className":"hb-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group hb-header" style="padding-top:2rem;padding-right:1rem;padding-bottom:2rem;padding-left:1rem"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"1rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"15%","className":"header-logo"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="flex-basis:15%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":190} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:group {"className":"navigation-menu","layout":{"type":"constrained"}} -->
<div class="wp-block-group navigation-menu"><!-- wp:navigation {"ref":4,"textColor":"custom-hb-white","icon":"menu","overlayBackgroundColor":"custom-hb-primary","className":"main-menu","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0.5rem"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:group {"className":"header-cta","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group header-cta"><!-- wp:buttons {"className":"header-top-btn","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons header-top-btn"><!-- wp:button {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"left":"2rem","right":"2rem","top":"0.75rem","bottom":"0.75rem"}}},"className":"btn"} -->
<div class="wp-block-button btn"><a class="wp-block-button__link wp-element-button" style="border-radius:5px;padding-top:0.75rem;padding-right:2rem;padding-bottom:0.75rem;padding-left:2rem"><?php echo esc_html__( 'Contact Us', 'health-bridge' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->