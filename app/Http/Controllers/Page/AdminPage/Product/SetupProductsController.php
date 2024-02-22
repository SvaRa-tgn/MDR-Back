<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SetupProductsAction;

class SetupProductsController extends SetupProductsAction
{
    public function product(SetupProductsAction $action)
    {
        return $action->execute();
    }

}
