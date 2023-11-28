<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $this->loadViewsFrom(resource_path('views/layouts'), 'layouts');
        $this->loadViewsFrom(resource_path('views/includes'), 'includes');
        $this->loadViewsFrom(resource_path('views/front'), 'front');
        $this->loadViewsFrom(resource_path('views/crm'), 'crm');
    }
}
