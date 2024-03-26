<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SetupProductsAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class SetupProductsController extends Controller
{
    public function product(SetupProductsAction $action): View
    {
        return $action->execute();
    }

}
