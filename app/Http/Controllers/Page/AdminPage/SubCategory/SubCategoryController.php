<?php

namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\SubCategoryAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class SubCategoryController extends Controller
{
    public function subCategory(SubCategoryAction $action): View
    {
        return $action->execute();
    }

}
