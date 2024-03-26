<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Services\Admin\Product\ProductService;
use Illuminate\View\View;

class ProductAction
{
    public $action;
    private CategoryRepository $category;
    private ColorRepository $color;
    private ProductService $service;

    public function __construct(ProductRepository $action,
                                CategoryRepository $category,
                                ColorRepository $color,
                                ProductService $service)
    {
        $this->action = $action;
        $this->category = $category;
        $this->color = $color;
        $this->service = $service;
    }

    public function execute(): View
    {
        $categories = $this->category->category();
        $colors = $this->color->color();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/product/product',
            [
                'categories' => $categories,
                'colors' => $colors,
                'head' => $head
            ]);
    }

}
