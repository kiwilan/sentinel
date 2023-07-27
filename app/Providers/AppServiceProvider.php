<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Kiwilan\Steward\Utils\NavigationItem;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Database\Eloquent\Model::preventLazyLoading(! $this->app->environment('production'));

        \Illuminate\Support\Facades\View::share('navMain', [
            new NavigationItem(
                label: 'Projects',
                route: 'projects.index',
                active: 'projects.index',
                icon: 'folder'
            ),
        ]);
    }
}
