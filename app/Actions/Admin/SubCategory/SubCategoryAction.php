<?php


namespace App\Actions\Admin\SubCategory;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;

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
        $categories = $this->categoryRepository->showCategory();
        $subCategories = $this->action->showSubCategory();

        return ['categories' => $categories, 'subCategories' => $subCategories];
    }
}
