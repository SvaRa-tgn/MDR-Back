<?php

namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\CreateCategoryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Category\CreateCategoryRequest;
use Illuminate\Http\RedirectResponse;

class CreateCategoryController extends Controller
{
    public function createCategory(CreateCategoryAction $action, CreateCategoryRequest $request): RedirectResponse
    {
        return $action->execute($request);
    }

}
