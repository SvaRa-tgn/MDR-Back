<?php

namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\EditCategoryAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class EditCategoryController extends Controller
{
    public function editCategory(EditCategoryAction $action, string $slugCategory): View
    {
        return $action->execute($slugCategory);
    }

}
