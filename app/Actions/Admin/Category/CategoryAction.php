<?php

namespace App\Actions\Admin\Category;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Admin\Category\CategoryService;

class CategoryAction
{
    public $action;

    public $service;

    public function __construct(CategoryRepository $action, CategoryService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute()
    {
        $categories = $this->action->category();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/category/category', ['categories' => $categories, 'head' => $head]);
    }

}
