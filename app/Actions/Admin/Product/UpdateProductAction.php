<?php

namespace App\Actions\Admin\Product;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class UpdateProductAction extends Controller
{
    public $action;

    private CategoryRepository $categoryRepository;

    public function __construct(ProductRepository $action, CategoryRepository $categoryRepository)
    {
        $this->action = $action;
        $this->categoryRepository = $categoryRepository;
    }

    public function execute($slug_full_name)
    {
        $categories = $this->categoryRepository->showCategory();
        $sub_categories = $this->action->subCategoriesShow();
        $modul_collections = $this->action->modulCollectionShow();
        $ready_collections = $this->action->readyCollectionShow();
        $colors = $this->action->colorShow();
        $images = $this->action->showImageProduct($slug_full_name);
        $product = $this->action->showUpdateProduct($slug_full_name);

        $head = [
            'title' => 'Админка - Изменение товара. MDR',
            'description' => 'Админка - Создание, правки и удаления Товаров'
        ];

        return view ('/app-page/admin-page/admin-box/product/update-product',
            [
                'head' => $head,
                'product' => $product,
                'categories' => $categories,
                'sub_categories' => $sub_categories,
                'modul_collections' => $modul_collections,
                'ready_collections' => $ready_collections,
                'colors' => $colors,
                'images' => $images,
            ]);
    }

}
