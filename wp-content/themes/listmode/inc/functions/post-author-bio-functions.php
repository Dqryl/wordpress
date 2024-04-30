<?php
/**
* Author bio box
*
* @package ListMode WordPress Theme
* @copyright Copyright (C) 2024 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

class ListMode_Author_Bio {

    private static $instance;

    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function add_author_bio_box() {
        $content = '';

        if (is_single()) {
            $content .= '
                <div class="listmode-author-bio">
                    <div class="listmode-author-bio-inside">
                        <div class="listmode-author-bio-top">
                            <span class="listmode-author-bio-gravatar">
                                ' . get_avatar(get_the_author_meta('email'), 80) . '
                            </span>
                            <div class="listmode-author-bio-text">
                                <div class="listmode-author-bio-name">' . esc_html__('Author: ', 'listmode') . '<span>' . get_the_author_link() . '</span></div>
                                <div class="listmode-author-bio-text-description">' . wp_kses_post(get_the_author_meta('description', get_query_var('author'))) . '</div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }

        return apply_filters('listmode_add_author_bio_box', $content);
    }

}
// Initialize the instance
ListMode_Author_Bio::get_instance();