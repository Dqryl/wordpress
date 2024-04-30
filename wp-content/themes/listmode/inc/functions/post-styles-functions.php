<?php
/**
* Post Styles Functions
*
* @package ListMode WordPress Theme
* @copyright Copyright (C) 2024 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function listmode_post_title_home_length() {
    $title_length = 6;
    if ( listmode_get_option('post_title_home_length') ) {
        $title_length = listmode_get_option('post_title_home_length');
    }
    return apply_filters( 'listmode_post_title_home_length', $title_length );
}

function listmode_post_summaries_class() {
    global $post;

    $post_class = '';

    if ( is_sticky($post->ID) ) {
        $post_class .= ' listmode-summaries-sticky-post';
    }

    return apply_filters( 'listmode_post_summaries_class', $post_class );
}