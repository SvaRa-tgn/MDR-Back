<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SetupProductsAction;
use App\Http\Controllers\Controller;

class SetupProductsController extends Controller
{
    public function product(SetupProductsAction $action)
    {
        return $action->execute();
    }

}
