<?php


namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\EditCategoryAction;

class EditCategoryController extends EditCategoryAction
{
    public function editCategory(EditCategoryAction $action, $id, $name)
    {
        return $action->execute($id, $name);
    }

}
