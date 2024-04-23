<?php

namespace App\Actions\Admin\SubCategory;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Admin\SubCategory\EditSubCategoryService;
use Illuminate\View\View;

class EditSubCategoryAction extends Controller
{
    public function __construct(private SubCategoryRepository $repository,
                                private CategoryRepository $categoryRepository, private EditSubCategoryService $service){}

    public function execute(string $slugSubCategory): View
    {
        $categories = $this->categoryRepository->category();

        $subCategory = $this->repository->getSubCategory($slugSubCategory);

        $head = $this->service->editTitle($subCategory->sub_category);

        return view ('/app-page/admin-page/admin-box/sub-category/edit-sub-category',
            ['categories' => $categories, 'subCategory' => $subCategory, 'head' => $head]);
    }

}
