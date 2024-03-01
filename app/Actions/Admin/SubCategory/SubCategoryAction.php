<?php

namespace App\Actions\Admin\SubCategory;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Admin\SubCategory\SubCategoryService;

class SubCategoryAction
{
    public $action;

    private $categoryRepository;

    private $service;

    public function __construct(SubCategoryRepository $action, CategoryRepository $categoryRepository, SubCategoryService $service)
    {
        $this->action = $action;

        $this->categoryRepository = $categoryRepository;

        $this->service = $service;
    }

    public function execute()
    {
        $categories = $this->categoryRepository->category();

        $subCategories = $this->action->subCategory();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/sub-category/sub-category', ['categories' => $categories, 'subCategories' => $subCategories, 'head' => $head]);
    }

}
