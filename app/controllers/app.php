<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function current_template() {
        if (is_front_page()) return 'frontpage';
        if (is_page('contact')) return 'contact';
        if (is_page('events')) return 'events';
        if (is_single()) return 'posts';
        if (is_404()) return '404';

        return 'others';
    }

    function works_posts_picked() {
        
        $args = array(
            'post_type' => 'works',
            'meta_key' => 'is-picked',
            'meta_value' => 'picked!'
        );

        return new WP_Query( $args );
    }    

    function works_posts_not_picked() {
        
        $args = array(
            'post_type' => 'works',
            'meta_key' => 'is-picked',
            'meta_value' => 'no'
        );
        return new WP_Query( $args );
    }    

    function interviews_posts() {
        $args = array(
            'post_type' => 'interviews',
        );
        return new WP_Query( $args );
    }
}

// if ( $the_query->have_posts() ) {
//     $count = 0;
//     while ( $the_query->have_posts() && $count < 5 ) {
//         $output = array(
//             'title' => get_post_meta($the_query->post->ID, 'title', true),
//             'image' =>get_the_post_thumbnail_url($the_query->post->ID, 'full'),
//             'area' => get_post_meta($the_query->post->ID, 'area', true),
//             'budget' => get_post_meta($the_query->post->ID, 'budget', true),
//             'type' => get_post_meta($the_query->post->ID, 'type', true),
//             'place' => get_post_meta($the_query->post->ID, 'place', true),
//         );
//         $count++;
//     }
// }