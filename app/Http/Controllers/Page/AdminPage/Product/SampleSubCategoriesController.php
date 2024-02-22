<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SampleSubCategoriesAction;

class SampleSubCategoriesController extends SampleSubCategoriesAction
{
    public function sample(SampleSubCategoriesAction $action, $id)
    {
        return $action->execute($id);
    }

}
