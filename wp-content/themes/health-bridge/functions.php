<?php
/**
 * Health Bridge theme function file that loads all necessary features for the theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Health Bridge
 */
 
if ( ! defined( 'HELATH_BRIDGE_VERSION' ) ) {
	define( 'HELATH_BRIDGE_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! defined( 'HELATH_BRIDGE_URL' ) ) {
	define( 'HELATH_BRIDGE_URL', trailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'HELATH_BRIDGE_STYLESHEET_URL' ) ) {
	define( 'HELATH_BRIDGE_STYLESHEET_URL', trailingslashit( get_stylesheet_uri() ) );
}


if ( ! function_exists( 'health_bridge_theme_support' ) ) :
	/**
	 * Setup theme function if necessary with after_setup_theme hook.
	 *
	 */
	function health_bridge_theme_support() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'health-bridge', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		// Add support for block styles. register_block_style
		add_theme_support( 'wp-block-styles' );

		
	}
endif;
add_action( 'after_setup_theme', 'health_bridge_theme_support' );

/**
 * Register Pattern Categories
 * 
 * @since 1.0.0
 */
if(function_exists('register_block_pattern_category')){
    register_block_pattern_category(
        'health_bridge_theme_patterns',
        [ 
            'label' => __( 'HB Patterns', 'health-bridge' )
        ]
    );
}

/**
 * Enqueue block editor and front-end styles for the theme.
 * This function enqueues a stylesheet for both the block editor and the front end. 
 * The stylesheet and necessary js & css file enqueued.
 * 
 * @since 1.0.0
 */

if(!function_exists('health_bridge_enqueue_assets')){
    function health_bridge_enqueue_assets() {
        
        // Register Styles    
		wp_register_style('health_bridge-block-style', HELATH_BRIDGE_URL . '/assets/css/blocks.css',array());     
		wp_register_style('health_bridge-remix-icon', HELATH_BRIDGE_URL . '/assets/css/remixicon.css', [], wp_get_theme()->get('Version'));
        wp_register_style('health_bridge-main-style', HELATH_BRIDGE_URL . '/assets/css/style.css', [], wp_get_theme()->get('Version'));
		wp_register_style('health_bridge-style', HELATH_BRIDGE_STYLESHEET_URL, [], wp_get_theme()->get('Version'));

		// Register Scripts
		wp_register_script('health_bridge_script', HELATH_BRIDGE_URL . '/assets/js/scripts.js',array( 'jquery' ),wp_get_theme()->get('Version'));

        // Enqueue Styles        
        wp_enqueue_style( 'health_bridge-block-style' );
        wp_enqueue_style( 'health_bridge-remix-icon' );		
		wp_enqueue_style( 'health_bridge-style' );
		wp_enqueue_style( 'health_bridge-main-style' );

		// Enqueue Scripts
		wp_enqueue_script('health_bridge_script');
    }
}

add_action( 'enqueue_block_assets', 'health_bridge_enqueue_assets' );


if(!function_exists('health_bridge_enqueue_editor_assets')){
	function health_bridge_enqueue_editor_assets() {

		wp_enqueue_script(
			'health_bridge_block_styles',
			HELATH_BRIDGE_URL . '/assets/js/block-styles.js',
			array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
			wp_get_theme()->get('Version')
		);
	}
	
}
add_action( 'enqueue_block_editor_assets', 'health_bridge_enqueue_editor_assets' );