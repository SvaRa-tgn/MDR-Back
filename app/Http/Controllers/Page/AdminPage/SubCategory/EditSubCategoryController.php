<?php


namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\EditSubCategoryAction;

class EditSubCategoryController extends EditSubCategoryAction
{
    public function editSubCategory(EditSubCategoryAction $action, $slug_sub_category)
    {

        return $action->execute($slug_sub_category);
    }

}
