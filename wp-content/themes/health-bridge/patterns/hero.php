<?php
/**
 * Title: Hero
 * Slug: health-bridge/hero
 * Categories: hb-theme-patterns
 */
$health_bridge_media = [
	HELATH_BRIDGE_URL . 'assets/images/header.jpg',
	HELATH_BRIDGE_URL . 'assets/images/hero.jpg'
];
?>
<!-- wp:group {"tagName":"section","className":"hb-hero","layout":{"type":"default"}} -->
<section class="wp-block-group hb-hero"><!-- wp:cover {"url":"<?php echo esc_url($health_bridge_media[0]); ?>","customGradient":"linear-gradient(90deg,rgba(18,172,142,0.9) 0%,rgba(18,172,142,0.7) 100%)","style":{"spacing":{"padding":{"top":"12rem","bottom":"5rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="padding-top:12rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:5rem;padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(90deg,rgba(18,172,142,0.9) 0%,rgba(18,172,142,0.7) 100%)"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'Health Service', 'health-bridge' ); ?>" src="<?php echo esc_url($health_bridge_media[0]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"2rem"}}},"className":"hero-content"} -->
<div class="wp-block-columns are-vertically-aligned-center hero-content"><!-- wp:column {"verticalAlignment":"center","width":"65%","style":{"spacing":{"blockGap":"2rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"none","lineHeight":"1.1"}},"fontSize":"hb-xxl","fontFamily":"poppins"} -->
<h1 class="wp-block-heading has-poppins-font-family has-hb-xxl-font-size" style="font-style:normal;font-weight:700;line-height:1.1;text-transform:none"><?php echo esc_html__( 'Providing an Exceptional Patient Experience', 'health-bridge' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"hero-description","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group hero-description"><!-- wp:paragraph -->
<p><?php echo esc_html__( "Welcome, where exceptional patient experiences are our priority. With compassionate care, state-of-the-art facilities, and a patient-centered approach, we're dedicated to your well-being. Trust us with your health and experience the difference.", 'health-bridge' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"width":"240px","className":"hero-spacer","style":{"layout":{"flexSize":"450px","selfStretch":"fixed"}}} -->
<div style="height:100px;width:240px" aria-hidden="true" class="wp-block-spacer hero-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"hero-btn"} -->
<div class="wp-block-buttons hero-btn"><!-- wp:button {"style":{"spacing":{"padding":{"left":"2rem","right":"2rem","top":"0.75rem","bottom":"0.75rem"}},"border":{"radius":"5px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:5px;padding-top:0.75rem;padding-right:2rem;padding-bottom:0.75rem;padding-left:2rem"><?php echo esc_html__( 'See Services', 'health-bridge' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:image {"lightbox":{"enabled":false},"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}},"className":"is-style-default"} -->
<figure class="wp-block-image size-full has-custom-border is-style-default"><img src="<?php echo esc_url($health_bridge_media[1]); ?>" alt="<?php echo esc_attr__( 'Doctor Smiling Face', 'health-bridge' ); ?>" style="border-radius:5px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->