<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\ProductAction;

class ProductController extends ProductAction
{
    public function productCreate(ProductAction $action)
    {
        return $action->execute();
    }

}
