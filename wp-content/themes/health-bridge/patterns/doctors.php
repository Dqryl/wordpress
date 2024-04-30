<?php
/**
 * Title: Doctors
 * Slug: health-bridge/doctors
 * Categories: hb-theme-patterns
 */
$health_bridge_media = [
	HELATH_BRIDGE_URL . 'assets/images/doctor-1.jpg',
	HELATH_BRIDGE_URL . 'assets/images/doctor-2.jpg',
	HELATH_BRIDGE_URL . 'assets/images/doctor-3.jpg'
];
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"1rem","right":"1rem"},"margin":{"bottom":"5rem"}}},"className":"doctors-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group doctors-section" style="margin-bottom:5rem;padding-top:5rem;padding-right:1rem;padding-bottom:5rem;padding-left:1rem"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"doctors-content","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group doctors-content"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"},"spacing":{"blockGap":"1rem"}},"className":"doctors-text","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group doctors-text"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"hb-lg"} -->
<h2 class="wp-block-heading has-hb-lg-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Our Special Doctors', 'health-bridge' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-text-light"}}}},"textColor":"custom-hb-text-light","fontSize":"hb-base"} -->
<p class="has-custom-hb-text-light-color has-text-color has-link-color has-hb-base-font-size"><?php echo esc_html__( 'We take pride in our exceptional team of doctors, each a specialist in their respective fields.', 'health-bridge' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"width":"0px","className":"doctors-content-spacer","style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}}} -->
<div style="height:100px;width:0px" aria-hidden="true" class="wp-block-spacer doctors-content-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"2rem"},"margin":{"top":"4rem"}}}} -->
<div class="wp-block-columns" style="margin-top:4rem"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"doctors__card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group doctors__card" style="padding-right:0;padding-left:0"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url($health_bridge_media[0]); ?>" alt="<?php echo esc_attr__( 'Cardiologist Doctors Name', 'health-bridge' ); ?>" /></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:1rem;padding-bottom:1rem"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"hb-md"} -->
<h4 class="wp-block-heading has-text-align-center has-hb-md-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Dr. James Anderson', 'health-bridge' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Cardiologist', 'health-bridge' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"doctors__card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group doctors__card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url($health_bridge_media[1]); ?>" alt="<?php echo esc_attr__( 'Neurosurgeon Doctors Name', 'health-bridge' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:1rem;padding-bottom:1rem"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"hb-md"} -->
<h4 class="wp-block-heading has-text-align-center has-hb-md-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Dr. Emily Smith', 'health-bridge' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Neurosurgeon', 'health-bridge' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"doctors__card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group doctors__card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url($health_bridge_media[2]); ?>" alt="<?php echo esc_attr__( 'Dermatologist Doctors Name', 'health-bridge' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:1rem;padding-bottom:1rem"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"hb-md"} -->
<h4 class="wp-block-heading has-text-align-center has-hb-md-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Dr. William Johnson', 'health-bridge' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Dermatologist', 'health-bridge' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->