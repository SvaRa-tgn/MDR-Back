<?php

namespace App\Actions\Admin\SubCategory;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Models\Category;

class SubCategoryAction extends Controller
{
    public $action;
    private CategoryRepository $categoryRepository;

    public function __construct(SubCategoryRepository $action, CategoryRepository $categoryRepository)
    {
        $this->action = $action;
        $this->categoryRepository = $categoryRepository;
    }

    public function execute()
    {
        $categories = $this->categoryRepository->category();
        $subCategories = $this->action->subCategory();

        return view ('/app-page/admin-page/admin-box/sub-category/sub-category', ['categories' => $categories, 'subCategories' => $subCategories]);
    }

}
