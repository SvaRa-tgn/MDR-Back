<?php


namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\CategoryAction;

class ShowCategoryController extends CategoryAction
{
    public function category(CategoryAction $action)
    {
        return $action->execute();
    }

}
