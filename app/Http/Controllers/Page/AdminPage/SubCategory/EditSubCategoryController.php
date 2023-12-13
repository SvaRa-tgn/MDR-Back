<?php


namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\EditSubCategoryAction;

class EditSubCategoryController extends EditSubCategoryAction
{
    public function editSubCategory(EditSubCategoryAction $action, $id, $name)
    {

        return $action->execute($id);
    }

}
