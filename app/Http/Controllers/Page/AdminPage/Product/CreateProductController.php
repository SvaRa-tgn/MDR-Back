<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\CreateProductAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\CreateProductRequest;
use Illuminate\Http\JsonResponse;

class CreateProductController extends Controller
{
    public function createProduct(CreateProductAction $action, CreateProductRequest $request): JsonResponse
    {
        return $action->execute($request);
    }

}
