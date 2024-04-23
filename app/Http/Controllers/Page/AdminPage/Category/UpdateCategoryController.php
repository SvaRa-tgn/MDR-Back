<?php

namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\UpdateCategoryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Category\UpdateCategoryRequest;
use Illuminate\Http\JsonResponse;

class UpdateCategoryController extends Controller
{
    public function updateCategory(UpdateCategoryAction $action, UpdateCategoryRequest $request, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }

}
