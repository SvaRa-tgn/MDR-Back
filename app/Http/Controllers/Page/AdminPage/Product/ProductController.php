<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\ProductAction;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function productCreate(ProductAction $action)
    {
        return $action->execute();
    }

}
