<?php

namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\CreateCategoryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Category\CreateCategoryRequest;

class CreateCategoryController extends Controller
{
    public function createCategory(CreateCategoryAction $action, CreateCategoryRequest $request)
    {
        return $action->execute($request);
    }

}
