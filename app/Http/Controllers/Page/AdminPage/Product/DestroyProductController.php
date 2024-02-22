<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\DestroyProductAction;

class DestroyProductController extends DestroyProductAction
{
    public function destroyProduct(DestroyProductAction $action, $id)
    {
        return $action->execute($id);
    }

}
