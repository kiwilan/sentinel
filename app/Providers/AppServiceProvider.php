<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
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
        Model::preventLazyLoading(! $this->app->environment('production'));

        View::share('navMain', [
            new NavigationItem(
                label: 'Projects',
                route: 'projects.index',
                active: 'projects.index',
                icon: 'folder'
            ),
        ]);
    }
}
