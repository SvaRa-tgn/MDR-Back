<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Admin\Product\AllProductsService;
use Illuminate\View\View;

class AllProductsAction
{
    public function __construct(private ProductRepository $product, private AllProductsService $service, private SubCategoryRepository $subCategory){}

    public function execute(string $page): View
    {
        $subCategories = $this->subCategory->subCategory();

        $products = $this->product->productsClass($page);

        $head = $this->service->title($page);

        return view ('/app-page/admin-page/admin-box/product/status-products', ['subCategories'=> $subCategories, 'products'=>$products, 'head'=>$head, 'page'=>$page]);

    }

}
