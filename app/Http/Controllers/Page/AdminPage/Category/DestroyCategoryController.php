<?php

namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\DestroyCategoryAction;
use App\Http\Controllers\Controller;

class DestroyCategoryController extends Controller
{
    public function destroyCategory(DestroyCategoryAction $action, $id)
    {
        return $action->execute($id);
    }

}
