<?php

namespace App\Actions\Admin\Product;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;

class ProductAction extends Controller
{
    public $action;

    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $action, CategoryRepository $categoryRepository)
    {
        $this->action = $action;
        $this->categoryRepository = $categoryRepository;
    }

    public function execute()
    {


        $head = [
            'title' => 'Админка - Товар. MDR',
            'description' => 'Админка - Создание, правки и удаления Товаров'
        ];

        return view ('/app-page/admin-page/admin-box/product/product', ['head' => $head]);
    }

}
