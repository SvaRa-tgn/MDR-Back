<?php

namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\EditCategoryAction;
use App\Http\Controllers\Controller;

class EditCategoryController extends Controller
{
    public function editCategory(EditCategoryAction $action, $slug_category)
    {
        return $action->execute($slug_category);
    }

}
