<?php
namespace App\Actions\Admin\SubCategory;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;

class EditSubCategoryAction extends Controller
{
    public $action;
    private CategoryRepository $categoryRepository;

    public function __construct(SubCategoryRepository $action, CategoryRepository $categoryRepository)
    {
        $this->action = $action;
        $this->categoryRepository = $categoryRepository;
    }

    public function execute($id)
    {
        $categories = $this->categoryRepository->showCategory();
        $subCategory = $this->action->editSubCategory($id);

        $categories = $categories->whereNotIn('name', $subCategory['category']);
        $categories = $categories->all();

        $head = [
            'title' => 'Админка - Подкатегория '. $subCategory['name'] . '. MDR',
            'description' => 'Админка - Создание, правки и удаления Подкатегории'
        ];

        return view ('/app-page/admin-page/admin-box/sub-category/edit-sub-category',
            ['categories' => $categories, 'subCategory' => $subCategory, 'head' => $head]);
    }

}
