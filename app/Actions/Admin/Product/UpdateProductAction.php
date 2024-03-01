<?php

namespace App\Actions\Admin\Product;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Repositories\Page\AdminPage\ModulCollection\ModulCollectionRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Admin\Product\UpdateProductService;

class UpdateProductAction
{
    public $action;
    private CategoryRepository $category;
    private SubCategoryRepository $sub_category;
    private ModulCollectionRepository $modulCollection;
    private ReadyCollectionRepository $readyCollection;
    private ColorRepository $color;
    private UpdateProductService $service;

    public function __construct(ProductRepository $action,
                                CategoryRepository $category,
                                SubCategoryRepository $sub_category,
                                ModulCollectionRepository $modulCollection,
                                ReadyCollectionRepository $readyCollection,
                                ColorRepository $color,
                                UpdateProductService $service)
    {
        $this->action = $action;
        $this->category = $category;
        $this->sub_category = $sub_category;
        $this->modulCollection = $modulCollection;
        $this->readyCollection = $readyCollection;
        $this->color = $color;
        $this->service = $service;
    }

    public function execute($slug_full_name)
    {
        $categories = $this->category->category();
        $sub_categories = $this->sub_category->subCategory();
        $modul_collections = $this->modulCollection->modulCollection();
        $ready_collections = $this->readyCollection->readyCollection();
        $colors = $this->color->color();
        $images = $this->action->showImageProduct($slug_full_name);
        $product = $this->action->showUpdateProduct($slug_full_name);
        $head = $this->service->editTitle($product->full_name);

        return view ('/app-page/admin-page/admin-box/product/update-product',
            [
                'head' => $head,
                'product' => $product,
                'categories' => $categories,
                'sub_categories' => $sub_categories,
                'modul_collections' => $modul_collections,
                'ready_collections' => $ready_collections,
                'colors' => $colors,
                'images' => $images,
            ]);
    }

}
