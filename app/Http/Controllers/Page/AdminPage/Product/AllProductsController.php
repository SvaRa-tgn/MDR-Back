<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\AllProductsAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AllProductsController extends Controller
{
    public function productsClass(AllProductsAction $action, string $page): View
    {
        return $action->execute($page);
    }

}
