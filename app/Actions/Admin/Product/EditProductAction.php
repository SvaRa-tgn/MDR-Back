<?php

namespace App\Actions\Admin\Product;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Admin\Product\EditProductService;

class EditProductAction extends Controller
{
    private CategoryRepository $category;

    private EditProductService $service;

    public function __construct(CategoryRepository $category, EditProductService $service)
    {
        $this->category = $category;

        $this->service = $service;
    }

    public function execute()
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
