<?php

namespace App\Controllers;

use Sober\Controller\Controller;

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
        if (is_category()) return 'category';
        if (is_tag() || is_page( 'new') || is_page( 'popular')) return 'tags';
        if (is_single()) return 'posts';
        if (is_404()) return '404';

        return 'else';
    }
}
