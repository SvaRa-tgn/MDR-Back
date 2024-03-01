<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\EditProductAction;
use App\Http\Controllers\Controller;

class EditProductController extends Controller
{
    public function editProduct(EditProductAction $action)
    {
        return $action->execute();
    }

}
