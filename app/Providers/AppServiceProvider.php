<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\SubCategory;
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
        view()->composer(['static.main-block.footer', 'static.aside.catalog-aside'], function ($view) {
            $view->with('categories', Category::all()->sortBy('category'));
            $view->with('sub_categories', SubCategory::all()->sortBy('sub_category'));
        });
    }
}
