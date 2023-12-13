<?php


namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\SubCategoryAction;

class ShowSubCategoryController extends SubCategoryAction
{
    public function showSubCategory(SubCategoryAction $action)
    {
        return view ('/app-page/admin-page/admin-box/sub-category/sub-category', $action->execute());
    }

}
