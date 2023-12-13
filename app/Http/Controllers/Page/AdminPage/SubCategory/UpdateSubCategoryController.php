<?php


namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\UpdateSubCategoryAction;
use App\Http\Requests\AdminPage\SubCategory\UpdateSUbCategoryRequest;

class UpdateSubCategoryController extends UpdateSubCategoryAction
{
    public function updateSubCategory(UpdateSubCategoryAction $action, UpdateSubCategoryRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
