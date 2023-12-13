<?php


namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\CategoryAction;

class ShowCategoryController extends CategoryAction
{
    public function showCategory(CategoryAction $action)
    {
        return $action->execute();
    }

}
