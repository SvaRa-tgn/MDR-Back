<?php


namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\DestroyCategoryAction;
use Illuminate\Http\Request;

class DestroyCategoryController extends DestroyCategoryAction
{
    public function destroyCategory(DestroyCategoryAction $action, Request $request, $slug_category)
    {
        return $action->execute($slug_category);
    }

}
