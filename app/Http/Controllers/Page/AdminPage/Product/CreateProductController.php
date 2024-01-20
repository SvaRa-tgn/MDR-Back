<?php


namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\CreateProductAction;
use App\Http\Requests\AdminPage\Product\CreateProductRequest;

class CreateProductController extends CreateProductAction
{
    public function createProduct(CreateProductAction $action, CreateProductRequest $request)
    {
        return $action->execute($request);
    }

}
