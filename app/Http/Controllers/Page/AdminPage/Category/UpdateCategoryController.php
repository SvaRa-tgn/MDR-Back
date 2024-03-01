<?php

namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\UpdateCategoryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Category\UpdateCategoryRequest;

class UpdateCategoryController extends Controller
{
    public function updateCategory(UpdateCategoryAction $action, UpdateCategoryRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
