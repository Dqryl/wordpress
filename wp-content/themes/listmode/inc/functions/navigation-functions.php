<?php
/**
* Posts navigation functions
*
* @package ListMode WordPress Theme
* @copyright Copyright (C) 2024 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

class ListMode_Navigation {

    private static $instance;

    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function wp_pagenavi() {
        ?>
        <nav class="navigation posts-navigation listmode-clearfix" role="navigation">
            <?php wp_pagenavi(); ?>
        </nav><!-- .navigation -->
        <?php
    }

    public function posts_navigation() {
        if ( !(listmode_get_option('hide_posts_navigation')) ) {
            if ( function_exists( 'wp_pagenavi' ) ) {
                $this->wp_pagenavi();
            } else {
                if ( listmode_get_option('posts_navigation_type') === 'normalnavi' ) {
                    the_posts_navigation(array('prev_text' => esc_html__( 'Older posts', 'listmode' ), 'next_text' => esc_html__( 'Newer posts', 'listmode' )));
                } else {
                    the_posts_pagination(array('mid_size' => 2, 'prev_text' => esc_html__( '&larr; Newer posts', 'listmode' ), 'next_text' => esc_html__( 'Older posts &rarr;', 'listmode' )));
                }
            }
        }
    }

    public function post_navigation() {
        global $post;
        if ( !(listmode_get_option('hide_post_navigation')) ) {
            the_post_navigation(array('prev_text' => esc_html__( '%title &rarr;', 'listmode' ), 'next_text' => esc_html__( '&larr; %title', 'listmode' )));
        }
    }

}
// Initialize the instance
ListMode_Navigation::get_instance();