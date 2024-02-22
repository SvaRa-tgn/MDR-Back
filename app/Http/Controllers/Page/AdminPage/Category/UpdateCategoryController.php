<?php

namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\UpdateCategoryAction;
use App\Http\Requests\AdminPage\Category\UpdateCategoryRequest;

class UpdateCategoryController extends UpdateCategoryAction
{
    public function updateCategory(UpdateCategoryAction $action, UpdateCategoryRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
