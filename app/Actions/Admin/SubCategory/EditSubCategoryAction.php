<?php

namespace App\Actions\Admin\SubCategory;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Admin\SubCategory\EditSubCategoryService;

class EditSubCategoryAction extends Controller
{
    public $action;

    private $categoryRepository;

    private $service;

    public function __construct(SubCategoryRepository $action, CategoryRepository $categoryRepository, EditSubCategoryService $service)
    {
        $this->action = $action;

        $this->categoryRepository = $categoryRepository;

        $this->service = $service;
    }

    public function execute($slug_sub_category)
    {
        $categories = $this->categoryRepository->category();

        $subCategory = $this->action->editSubCategory($slug_sub_category);

        $head = $this->service->title($subCategory);

        return view ('/app-page/admin-page/admin-box/sub-category/edit-sub-category',
            ['categories' => $categories, 'subCategory' => $subCategory, 'head' => $head]);
    }

}
