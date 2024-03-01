<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Repositories\Page\AdminPage\ModulCollection\ModulCollectionRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;
use App\Services\Admin\Product\ProductService;

class ProductAction
{
    public $action;
    private CategoryRepository $category;
    private ModulCollectionRepository $modulCollection;
    private ReadyCollectionRepository $readyCollection;
    private ColorRepository $color;
    private ProductService $service;

    public function __construct(ProductRepository $action,
                                CategoryRepository $category,
                                ModulCollectionRepository $modulCollection,
                                ReadyCollectionRepository $readyCollection,
                                ColorRepository $color,
                                ProductService $service)
    {
        $this->action = $action;
        $this->category = $category;
        $this->modulCollection = $modulCollection;
        $this->readyCollection = $readyCollection;
        $this->color = $color;
        $this->service = $service;
    }

    public function execute()
    {
        $categories = $this->category->category();
        $modul_collections = $this->modulCollection->modulCollection();
        $ready_collections = $this->readyCollection->readyCollection();
        $colors = $this->color->color();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/product/product',
            [
                'categories' => $categories,
                'modul_collections' => $modul_collections,
                'ready_collections' => $ready_collections,
                'colors' => $colors,
                'head' => $head
            ]);
    }

}
