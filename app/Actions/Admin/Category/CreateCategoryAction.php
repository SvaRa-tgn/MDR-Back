<?php

namespace App\Actions\Admin\Category;

use App\DTO\DTOcreateCategory;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Admin\Category\CreateCategoryService;

class CreateCategoryAction
{
    public $action;

    public $service;

    public function __construct(CategoryRepository $action, CreateCategoryService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute($request)
    {
        $category = $this->action->createCategory(DTOcreateCategory::fromCreateCategoryRequest($request));

        $this->service->addImage(DTOcreateCategory::fromCreateCategoryRequest($request), $category);

        return redirect()->route('category')->with('success', 'Категория создана');
    }

}
