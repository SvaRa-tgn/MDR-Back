<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SampleSubCategoriesAction;
use App\Http\Controllers\Controller;

class SampleSubCategoriesController extends Controller
{
    public function sample(SampleSubCategoriesAction $action, $id)
    {
        return $action->execute($id);
    }

}
