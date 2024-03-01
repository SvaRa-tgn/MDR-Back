<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\DestroyProductAction;
use App\Http\Controllers\Controller;

class DestroyProductController extends Controller
{
    public function destroyProduct(DestroyProductAction $action, $id)
    {
        return $action->execute($id);
    }

}
