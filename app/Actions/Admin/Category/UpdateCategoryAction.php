<?php

namespace App\Actions\Admin\Category;

use App\DTO\DTOupdateCategory;
use App\Http\Requests\AdminPage\Category\UpdateCategoryRequest;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use Illuminate\Http\JsonResponse;

class UpdateCategoryAction
{
    public function __construct(private CategoryRepository $repository){}

    public function execute(UpdateCategoryRequest $request, int $id): JsonResponse
    {
        $category = $this->repository->updateCategory(DTOupdateCategory::fromUpdateCategoryRequest($request), $id);

        return response()->json(route('editCategory', $category->slug_category));
    }

}
