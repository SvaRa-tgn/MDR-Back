<?php

namespace App\Actions\Admin\Product;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class ProductAction extends Controller
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
        $categories = $this->categoryRepository->showCategory();
        $modul_collections = $this->action->modulCollectionShow();
        $ready_collections = $this->action->readyCollectionShow();
        $colors = $this->action->colorShow();

        $head = [
            'title' => 'Админка - Товар. MDR',
            'description' => 'Админка - Создание, правки и удаления Товаров'
        ];

        return view ('/app-page/admin-page/admin-box/product/product',
            [
                'categories' => $categories,
                'modul_collections' => $modul_collections,
                'ready_collections' => $ready_collections,
                'colors' => $colors,
                'head' => $head
            ]);
    }

}
