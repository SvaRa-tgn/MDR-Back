<?php

namespace App\Actions\Admin\Category;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Admin\Category\EditCategoryService;
use Illuminate\View\View;

class EditCategoryAction
{
    public function __construct(private CategoryRepository $repository, private EditCategoryService $service){}

    public function execute(string $slugCategory): View
    {
        $category = $this->repository->getCategory($slugCategory);

        $head = $this->service->editTitle($category->category);

        return view('/app-page/admin-page/admin-box/category/edit-category', ['category' => $category, 'head' => $head]);

    }

}
