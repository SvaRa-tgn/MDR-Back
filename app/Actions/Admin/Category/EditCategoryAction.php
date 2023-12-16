<?php

namespace App\Actions\Admin\Category;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;

class EditCategoryAction extends Controller
{
    public $action;

    public function __construct(CategoryRepository $action)

    {
        $this->action = $action;
    }

    public function execute($slug_category)
    {
        $category = $this->action->editCategory($slug_category);

        $head = [
            'title' => 'Админка - Категория '. $category['name'] . '. MDR',
            'description' => 'Админка - Создание, правки и удаления Категорий'
        ];

        return view ('/app-page/admin-page/admin-box/category/edit-category', ['category' => $category, 'head' => $head]);
    }

}
