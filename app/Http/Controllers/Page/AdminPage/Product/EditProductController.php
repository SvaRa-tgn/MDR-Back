<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\EditProductAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class EditProductController extends Controller
{
    public function editProduct(EditProductAction $action, $slug_full_name): View
    {
        return $action->execute($slug_full_name);
    }

}
