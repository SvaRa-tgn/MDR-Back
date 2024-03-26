<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Admin\Product\UpdateProductService;
use Illuminate\View\View;

class EditProductAction
{
    public $action;
    private CategoryRepository $category;
    private SubCategoryRepository $sub_category;
    private ColorRepository $color;
    private UpdateProductService $service;

    public function __construct(ProductRepository $action,
                                CategoryRepository $category,
                                SubCategoryRepository $sub_category,
                                ColorRepository $color,
                                UpdateProductService $service)
    {
        $this->action = $action;
        $this->category = $category;
        $this->sub_category = $sub_category;
        $this->color = $color;
        $this->service = $service;
    }

    public function execute($slug_full_name)
    {
        $product = $this->action->product($slug_full_name);
        if(isset($product)){
            $categories = $this->category->category();
            $sub_categories = $this->sub_category->subCategory();
            $colors = $this->color->color();
            $images = $this->action->showImageProduct($slug_full_name);
            $head = $this->service->editTitle($product->full_name);
        } else {
            return abort(404);
        }

        return view ('/app-page/admin-page/admin-box/product/update-product',
            [
                'head' => $head,
                'product' => $product,
                'categories' => $categories,
                'sub_categories' => $sub_categories,
                'colors' => $colors,
                'images' => $images,
            ]);
    }

}
