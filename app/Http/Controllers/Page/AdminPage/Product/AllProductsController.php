<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\AllProductsAction;
use App\Http\Controllers\Controller;

class AllProductsController extends Controller
{
    public function productsClass(AllProductsAction $action, $page)
    {
        return $action->execute($page);
    }

}
