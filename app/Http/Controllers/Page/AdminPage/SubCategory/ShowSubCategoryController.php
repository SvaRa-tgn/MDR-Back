<?php


namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\SubCategoryAction;

class ShowSubCategoryController extends SubCategoryAction
{
    public function subCategory(SubCategoryAction $action)
    {
        return $action->execute();
    }

}
