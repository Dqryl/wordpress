<?php
/**
 * Title: Why Us
 * Slug: health-bridge/why-us
 * Categories: hb-theme-patterns
 */
$health_bridge_media = [
	HELATH_BRIDGE_URL . 'assets/images/choose-us.jpg'
];
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group" style="padding-top:5rem;padding-bottom:5rem"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"3rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":"400px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($health_bridge_media[0]); ?>" alt="<?php echo esc_attr__( 'Why Us', 'health-bridge' ); ?>" style="border-radius:10px;width:400px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"1rem","left":"1rem"},"blockGap":"1rem"}}} -->
<div class="wp-block-column" style="padding-right:1rem;padding-left:1rem"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"className":"why-us-text","layout":{"type":"constrained"}} -->
<div class="wp-block-group why-us-text"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"hb-lg"} -->
<h2 class="wp-block-heading has-hb-lg-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Why Choose Us', 'health-bridge' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'With a steadfast commitment to your well-being, our team of highly trained healthcare professionals ensures that you receive nothing short of exceptional patient experiences.', 'health-bridge' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"2rem"},"blockGap":"1.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:2rem"><!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"why__us_icon","layout":{"type":"constrained"}} -->
<div class="wp-block-group why__us_icon"><!-- wp:paragraph -->
<p><i class="ri-hand-heart-line"></i></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"hb-md"} -->
<h4 class="wp-block-heading has-hb-md-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Intensive Care', 'health-bridge' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Our Intensive Care Unit is equipped with advanced technology and professional team.', 'health-bridge' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"why__us_icon","layout":{"type":"constrained"}} -->
<div class="wp-block-group why__us_icon"><!-- wp:paragraph -->
<p><i class="ri-truck-line"></i></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"hb-md"} -->
<h4 class="wp-block-heading has-hb-md-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Free Ambulance Car', 'health-bridge' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'A compassionate initiative to prioritize your health and well-being without any financial burden.', 'health-bridge' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"why__us_icon","layout":{"type":"constrained"}} -->
<div class="wp-block-group why__us_icon"><!-- wp:paragraph -->
<p><i class="ri-hospital-line"></i></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"hb-md"} -->
<h4 class="wp-block-heading has-hb-md-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Medical and Surgical', 'health-bridge' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Our Medical and Surgical services offer advanced healthcare solutions to address medical needs.', 'health-bridge' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->