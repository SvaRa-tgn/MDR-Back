<?php

namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\EditSubCategoryAction;
use Illuminate\View\View;

class EditSubCategoryController extends EditSubCategoryAction
{
    public function editSubCategory(EditSubCategoryAction $action, string $slugSubCategory): View
    {
        return $action->execute($slugSubCategory);
    }

}
