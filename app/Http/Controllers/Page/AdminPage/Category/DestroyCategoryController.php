<?php

namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\DestroyCategoryAction;

class DestroyCategoryController extends DestroyCategoryAction
{
    public function destroyCategory(DestroyCategoryAction $action, $id)
    {
        return $action->execute($id);
    }

}
