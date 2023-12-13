<?php


namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\CreateCategoryAction;
use App\Http\Requests\AdminPage\Category\CreateCategoryRequest;

class CreateCategoryController extends CreateCategoryAction
{
    public function createCategory(CreateCategoryAction $action,CreateCategoryRequest $request)
    {
        return $action->execute($request);
    }

}
