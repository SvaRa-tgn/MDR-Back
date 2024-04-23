<?php

namespace App\Actions\Admin\SubCategory;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Admin\SubCategory\SubCategoryService;
use Illuminate\View\View;

class SubCategoryAction
{
    public function __construct(private SubCategoryRepository $subCategoryRepository,
                                private CategoryRepository $categoryRepository, private SubCategoryService $service){}

    public function execute(): View
    {
        $categories = $this->categoryRepository->category();

        $subCategories = $this->subCategoryRepository->subCategory();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/sub-category/sub-category',
            ['categories' => $categories, 'subCategories' => $subCategories, 'head' => $head]);
    }

}
