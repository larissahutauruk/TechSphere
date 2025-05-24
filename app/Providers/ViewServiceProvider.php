<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\categories;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function boot()
    {
        // Bagikan $categories ke semua view
        View::composer('*', function ($view) {
            $categories = Categories::all();
            $view->with('categories', $categories);
        });
    }
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
}
