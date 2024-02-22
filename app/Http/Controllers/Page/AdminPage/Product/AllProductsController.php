<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\AllProductsAction;

class AllProductsController extends AllProductsAction
{
    public function products(AllProductsAction $action, $page)
    {
        return $action->execute($page);
    }

}
