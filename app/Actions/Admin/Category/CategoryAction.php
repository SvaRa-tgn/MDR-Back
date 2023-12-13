<?php

namespace App\Actions\Admin\Category;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;

class CategoryAction extends Controller
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
        $categories = $this->categoryRepository->showCategory();

        $head = [
            'title' => 'Админка - Категории. MDR',
            'description' => 'Админка - Создание, правки и удаления Категорий'
        ];

        return view ('/app-page/admin-page/admin-box/category/category', ['categories' => $categories, 'head' => $head]);
    }

}
