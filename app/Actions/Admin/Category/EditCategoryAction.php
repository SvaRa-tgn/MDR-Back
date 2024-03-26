<?php

namespace App\Actions\Admin\Category;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Admin\Category\EditCategoryService;
use Illuminate\Foundation\Application;
use Illuminate\View\View;

class EditCategoryAction
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

        if(empty($category) OR $category === null){
            return abort(404);
        } else {
            $head = $this->service->editTitle($category->category);

            return view('/app-page/admin-page/admin-box/category/edit-category', ['category' => $category, 'head' => $head]);
        }
    }

}
