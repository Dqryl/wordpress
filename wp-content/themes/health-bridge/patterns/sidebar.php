<?php
/**
 * Title: Sidebar
 * Slug: health-bridge/sidebar
 * Categories: hb-theme-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"2rem","left":"2rem"},"blockGap":"3rem"}},"layout":{"type":"default"},"fontSize":"hb-base"} -->
<div class="wp-block-group has-hb-base-font-size" style="padding-right:2rem;padding-left:2rem"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"},"metadata":{"name":"Search Bar"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"hb-md"} -->
<h3 class="wp-block-heading has-hb-md-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'Search', 'health-bridge' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"\u003cstrong\u003eSearch\u003c/strong\u003e","showLabel":false,"widthUnit":"%","buttonText":"Search","fontSize":"hb-base","fontFamily":"poppins"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"},"metadata":{"name":"Categories"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'Categories', 'health-bridge' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:categories {"style":{"typography":{"textTransform":"capitalize"}},"fontSize":"hb-base"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"},"metadata":{"name":"Tags"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'Tags', 'health-bridge' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"numberOfTags":10,"smallestFontSize":"1rem","largestFontSize":"3rem","className":"is-style-outline","style":{"spacing":{"padding":{"right":"1.5rem","left":"1.5rem"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"},"metadata":{"name":"Archive"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'Archive', 'health-bridge' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:archives /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"},"metadata":{"name":"Recent Postss"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'Recent Posts', 'health-bridge' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:latest-posts {"style":{"spacing":{"padding":{"right":"1.5rem","left":"1.5rem"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"},"metadata":{"name":"Recent Comments"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'Recent Comments', 'health-bridge' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:latest-comments /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->