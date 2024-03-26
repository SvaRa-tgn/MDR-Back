<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\ProductAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function productCreate(ProductAction $action): View
    {
        return $action->execute();
    }

}
