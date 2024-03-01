<?php

namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\UpdateSubCategoryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\SubCategory\UpdateSUbCategoryRequest;

class UpdateSubCategoryController extends Controller
{
    public function updateSubCategory(UpdateSubCategoryAction $action, UpdateSubCategoryRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
