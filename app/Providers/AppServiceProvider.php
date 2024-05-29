<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\Search\ElascticSearchRepository;
use App\Repositories\Page\Search\Interfaces\SearchInterfaces;
use Elastic\Elasticsearch\Client;
use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Support\ServiceProvider;
use Laravel\Scout\EngineManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer(['static.main-block.footer', 'static.aside.catalog-aside', 'auth.reset-password'], function ($view) {
            $view->with('categories', Category::all()->sortBy('category'));
            $view->with('subCategories', SubCategory::all()->sortBy('sub_category'));
        });


    }
}
