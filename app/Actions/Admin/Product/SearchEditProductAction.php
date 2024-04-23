<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Admin\Product\EditProductService;
use Illuminate\View\View;

class SearchEditProductAction
{
    public function __construct(private CategoryRepository $category, private EditProductService $service){}

    public function execute(): View
    {
        $categories = $this->category->category();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/product/edit-product',
            [
                'head' => $head,
                'categories' => $categories
            ]);
    }

}
