<?php


namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\ProductAction;

class ShowProductController extends ProductAction
{
    public function product(ProductAction $action)
    {
        return $action->execute();
    }

}
