<?php
/**
* Layout Functions
*
* @package ListMode WordPress Theme
* @copyright Copyright (C) 2024 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

class ListMode_Layout {

    private static $instance;

    public function __construct() {
        // Add action for setting content width
        add_action('template_redirect', array($this, 'content_width'), 0);
    }

    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function hide_footer_widgets() {
        $hide_footer_widgets = false;

        if ( listmode_get_option('hide_footer_widgets') ) {
            $hide_footer_widgets = true;
        }

        return apply_filters( 'listmode_hide_footer_widgets', $hide_footer_widgets );
    }

    public function is_primary_menu_active() {
        $primary_menu_active = true;

        if ( listmode_get_option('disable_primary_menu') ) {
            $primary_menu_active = false;
        }

        return apply_filters( 'listmode_is_primary_menu_active', $primary_menu_active );
    }

    public function is_header_content_active() {
        $header_content_active = true;

        if ( listmode_get_option('hide_header_content') ) {
            $header_content_active = false;
        }

        return apply_filters( 'listmode_is_header_content_active', $header_content_active );
    }

    public function is_sticky_header_active() {
        $sticky_header_active = false;

        if ( listmode_get_option('enable_sticky_header') ) {
            $sticky_header_active = true;
        }

        return apply_filters( 'listmode_is_sticky_header_active', $sticky_header_active );
    }

    public function is_sticky_mobile_header_active() {
        $sticky_mobile_header_active = false;

        if ( listmode_get_option('enable_sticky_mobile_header') ) {
            $sticky_mobile_header_active = true;
        }

        return apply_filters( 'listmode_is_sticky_mobile_header_active', $sticky_mobile_header_active );
    }

    public function is_sticky_sidebar_active() {
        $sticky_sidebar_active = true;

        if ( listmode_get_option('disable_sticky_sidebar') ) {
            $sticky_sidebar_active = false;
        }

        return apply_filters( 'listmode_is_sticky_sidebar_active', $sticky_sidebar_active );
    }

    public function is_social_buttons_active() {
        $social_buttons_active = true;

        if ( listmode_get_option('hide_social_buttons') ) {
            $social_buttons_active = false;
        }

        return apply_filters( 'listmode_is_social_buttons_active', $social_buttons_active );
    }

    public function is_fitvids_active() {
        $fitvids_active = true;

        if ( listmode_get_option('disable_fitvids') ) {
            $fitvids_active = false;
        }

        return apply_filters( 'listmode_is_fitvids_active', $fitvids_active );
    }

    public function is_backtotop_active() {
        $backtotop_active = true;

        if ( listmode_get_option('disable_backtotop') ) {
            $backtotop_active = false;
        }

        return apply_filters( 'listmode_is_backtotop_active', $backtotop_active );
    }

    /**
     * Set the content width in pixels, based on the theme's design and stylesheet.
     *
     * Priority 0 to make it available to lower priority callbacks.
     *
     * @global int $content_width
     */
    public function content_width() {
        $content_width = 919;

        if ( is_singular() ) {
            if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
               $content_width = 1320;
            } else {
                $content_width = 919;
            }
        } else {
            $content_width = 1320;
        }

        $GLOBALS['content_width'] = apply_filters( 'listmode_content_width', $content_width ); /* phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound */
    }

}
// Initialize the instance
ListMode_Layout::get_instance();