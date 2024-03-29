<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Admin\Product\AllProductsService;
use Illuminate\View\View;

class AllProductsAction
{
    public ProductRepository $action;

    private AllProductsService $service;

    private SubCategoryRepository $subCategory;

    public function __construct(ProductRepository $action, AllProductsService $service, SubCategoryRepository $subCategory)
    {
        $this->action = $action;

        $this->service = $service;

        $this->subCategory = $subCategory;
    }

    public function execute($page): View
    {
        $subCategories = $this->subCategory->subCategory();

        $products = $this->action->productsClass($page);

        $head = $this->service->title($page);

        return view ('/app-page/admin-page/admin-box/product/status-products', ['subCategories'=> $subCategories, 'products'=>$products, 'head'=>$head, 'page'=>$page]);

    }

}
