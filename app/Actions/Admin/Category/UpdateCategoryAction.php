<?php

namespace App\Actions\Admin\Category;

use App\DTO\DTOupdateCategory;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use Illuminate\Http\JsonResponse;

class UpdateCategoryAction
{
    public $action;

    public function __construct(CategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): JsonResponse
    {
        $category = $this->action->updateCategory(DTOupdateCategory::fromUpdateCategoryRequest($request), $id);

        return response()->json(route('editCategory', $category->slug_category));
    }

}
