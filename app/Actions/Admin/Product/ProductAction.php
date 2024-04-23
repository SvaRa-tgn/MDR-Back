<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Services\Admin\Product\ProductService;
use Illuminate\View\View;

class ProductAction
{
    public function __construct(private CategoryRepository $category,
                                private ColorRepository $color,
                                private ProductService $service){}

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
