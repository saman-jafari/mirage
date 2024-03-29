<?php

namespace App\Controllers;

class App
{
    /**
     * @return string
     */
    public function siteName(): string
    {
        return get_bloginfo('name');
    }

    public static function title(): string
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'mirage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'mirage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'mirage');
        }
        return get_the_title();
    }
}
