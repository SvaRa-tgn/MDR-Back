<?php

namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\CreateSubCategoryAction;
use App\Http\Requests\AdminPage\SubCategory\SubCategoryCreateRequest;

class CreateSubCategoryController extends CreateSubCategoryAction
{
    public function createSubCategory(CreateSubCategoryAction $action, SubCategoryCreateRequest $request)
    {
        return $action->execute($request);
    }

}
