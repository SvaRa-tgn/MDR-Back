<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\UpdateProductAction;

class UpdateProductController extends UpdateProductAction
{
    public function updateProduct(UpdateProductAction $action, $slug_full_name)
    {
        return $action->execute($slug_full_name);
    }

}
