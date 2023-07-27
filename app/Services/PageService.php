<?php

namespace App\Services;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\View;

class PageService
{
    public static function meta(string $title): void
    {
        SEOTools::setTitle($title);
    }

    /**
     * @param  array<string, string>  $links
     */
    public static function breadcrumb(array $links): void
    {
        View::share('navigation', $links);
    }
}
