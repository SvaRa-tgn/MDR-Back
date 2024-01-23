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

    public function execute($slug_sub_category)
    {
        $categories = $this->categoryRepository->category();
        $subCategory = $this->action->editSubCategory($slug_sub_category);

        $categories = $categories->whereNotIn('category',$subCategory['category']);
        $categories = $categories->all();

        $head = [
            'title' => 'Админка - Подкатегория '. $subCategory['sub_category'] . '. MDR',
            'description' => 'Админка - Создание, правки и удаления Подкатегории'
        ];

        return view ('/app-page/admin-page/admin-box/sub-category/edit-sub-category',
            ['categories' => $categories, 'subCategory' => $subCategory, 'head' => $head]);
    }

}
