<?php


namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\DestroySubCategoryAction;
use Illuminate\Http\Request;

class DestroySubCategoryController extends DestroySubCategoryAction
{
    public function destroySubCategory(DestroySubCategoryAction $action, Request $request, $id)
    {
        return $action->execute($id);
    }

}
