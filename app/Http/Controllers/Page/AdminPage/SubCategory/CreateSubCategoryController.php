<?php

namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\CreateSubCategoryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\SubCategory\SubCategoryCreateRequest;
use Illuminate\Http\RedirectResponse;

class CreateSubCategoryController extends Controller
{
    public function createSubCategory(CreateSubCategoryAction $action, SubCategoryCreateRequest $request): RedirectResponse
    {
        return $action->execute($request);
    }
}
