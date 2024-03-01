<?php

namespace App\Actions\Admin\Category;

use App\DTO\DTOcreateCategory;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Admin\Category\CreateCategoryService;
use Illuminate\Http\RedirectResponse;

class CreateCategoryAction
{
    public $action;

    public function __construct(CategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request): RedirectResponse
    {
        $this->action->createCategory(DTOcreateCategory::fromCreateCategoryRequest($request));

        return redirect()->route('category');
    }

}
