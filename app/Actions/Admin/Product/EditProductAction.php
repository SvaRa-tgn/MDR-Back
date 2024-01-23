<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOsampleProduct;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class EditProductAction extends Controller
{
    public $action;

    private CategoryRepository $categoryRepository;

    public function __construct(ProductRepository $action, CategoryRepository $categoryRepository)
    {
        $this->action = $action;
        $this->categoryRepository = $categoryRepository;
    }

    public function execute()
    {
        $categories = $this->categoryRepository->category();

        $head = [
            'title' => 'Админка - Поиск товара. MDR',
            'description' => 'Админка - Создание, правки и удаления Товаров'
        ];

        return view ('/app-page/admin-page/admin-box/product/edit-product',
            [
                'head' => $head,
                'categories' => $categories
            ]);
    }

}
