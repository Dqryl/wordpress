<?php
/**
 * Title: HB Footer
 * Slug: health-bridge/footer
 * Categories: footer
 */
$health_bridge_media = [
	HELATH_BRIDGE_URL . 'assets/images/footer-logo.svg'
];
?>
<!-- wp:group {"tagName":"footer","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"className":"footer-section","layout":{"type":"default"}} -->
<footer class="wp-block-group footer-section" style="margin-top:0;margin-bottom:0"><!-- wp:group {"backgroundColor":"custom-hb-primary-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-hb-primary-light-background-color has-background"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"1rem","right":"1rem"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"2rem","left":"1rem"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:5rem;padding-right:1rem;padding-bottom:5rem;padding-left:1rem"><!-- wp:column {"width":"35%","style":{"spacing":{"blockGap":"1rem"}},"className":"footer-text"} -->
<div class="wp-block-column footer-text" style="flex-basis:35%"><!-- wp:image {"width":"190px","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url($health_bridge_media[0]); ?>" alt="<?php echo esc_attr__( 'Health Bridge Logo', 'health-bridge' ); ?>" style="width:190px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'We are honored to be a part of your healthcare journey and committed to delivering compassionate, personalized, and top-notch care every step of the way.', 'health-bridge' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Trust us with your health, and let us work together to achieve the best possible outcomes for you and your loved ones.', 'health-bridge' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"custom-hb-primary"} -->
<h4 class="wp-block-heading has-custom-hb-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'About Us', 'health-bridge' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":345,"overlayMenu":"never","className":"footer-menu-1","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"1rem"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"custom-hb-primary"} -->
<h4 class="wp-block-heading has-custom-hb-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'Our Services', 'health-bridge' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":338,"overlayMenu":"never","className":"footer-menu-2","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"1rem"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"custom-hb-primary"} -->
<h4 class="wp-block-heading has-custom-hb-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'Contact Us', 'health-bridge' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><i class="ri-map-pin-line icon-color"></i><?php echo esc_html__( '123, London Bridge Street, London', 'health-bridge' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><i class="ri-mail-send-line icon-color"></i><?php echo esc_html__( 'support@example.com', 'health-bridge' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><i class="ri-cellphone-line icon-color"></i><?php echo esc_html__( '(+012) 3456 789', 'health-bridge' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-hb-white"}}},"spacing":{"padding":{"left":"1rem","right":"1rem","top":"0.5rem","bottom":"0.5rem"},"blockGap":"2rem"}},"backgroundColor":"custom-hb-primary","textColor":"custom-hb-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-hb-white-color has-custom-hb-primary-background-color has-text-color has-background has-link-color" style="padding-top:0.5rem;padding-right:1rem;padding-bottom:0.5rem;padding-left:1rem"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"className":"copyright-section","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group copyright-section" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Copyright © 2024 by Health Bridge. All Rights Reserved.', 'health-bridge' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"copyright-social","layout":{"type":"constrained"}} -->
<div class="wp-block-group copyright-social"><!-- wp:social-links {"iconColor":"custom-hb-white","iconColorValue":"#ffffff","style":{"spacing":{"blockGap":{"left":"1rem"}}},"className":"footer__socials is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color footer__socials is-style-logos-only">	
<!-- wp:social-link {"url":"#","service":"instagram"} /-->
<!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"pinterest"} /-->
<!-- wp:social-link {"url":"#","service":"x"} /-->
</ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->