<?php

namespace App\Actions\Admin\Category;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Admin\Category\EditCategoryService;

class EditCategoryAction extends Controller
{
    public $action;

    public $service;

    public function __construct(CategoryRepository $action, EditCategoryService $service)
    {
        $this->action = $action;
        $this->service = $service;
    }

    public function execute($slug_category)
    {
        $category = $this->action->editCategory($slug_category);

        $head = $this->service->title($category);

        return view ('/app-page/admin-page/admin-box/category/edit-category', ['category' => $category, 'head' => $head]);
    }

}
