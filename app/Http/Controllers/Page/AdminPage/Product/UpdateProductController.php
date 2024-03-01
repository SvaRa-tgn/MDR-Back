<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\UpdateProductAction;
use App\Http\Controllers\Controller;

class UpdateProductController extends Controller
{
    public function updateProduct(UpdateProductAction $action, $slug_full_name)
    {
        return $action->execute($slug_full_name);
    }

}
