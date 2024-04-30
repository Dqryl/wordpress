<?php
/**
 * Title: About Us
 * Slug: health-bridge/about
 * Categories: hb-theme-patterns
 */
$health_bridge_media = [
	HELATH_BRIDGE_URL . 'assets/images/about.jpg'
];
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"1rem","right":"1rem"}}},"className":"about-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group about-section" style="padding-top:5rem;padding-right:1rem;padding-bottom:5rem;padding-left:1rem"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"1rem"}},"className":"about-us-text"} -->
<div class="wp-block-column is-vertically-aligned-center about-us-text"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"hb-lg"} -->
<h2 class="wp-block-heading has-hb-lg-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'About Us', 'health-bridge' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Welcome to our healthcare website, your one-stop destination for reliable and comprehensive health care information. We are committed to promoting wellness and providing valuable resources to empower you on your health journey.', 'health-bridge' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Explore our extensive collection of expertly written articles and guides covering a wide range of health topics. From understanding common medical conditions to tips for maintaining a healthy lifestyle, our content is designed to educate, inspire, and support you in making informed choices for your health.', 'health-bridge' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( "Discover practical health tips and lifestyle advice to optimize your physical and mental well-being. We believe that small changes can lead to significant improvements in your quality of life, and we're here to guide you on your path to a healthier and happier you.", 'health-bridge' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","width":"400px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($health_bridge_media[0]); ?>" alt="<?php echo esc_attr__( 'Women Doctor Smiley Face', 'health-bridge' ); ?>" style="border-radius:10px;width:400px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->