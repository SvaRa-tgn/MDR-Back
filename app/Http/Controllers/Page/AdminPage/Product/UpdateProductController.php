<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\UpdateProductAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\UpdateProductRequest;
use Illuminate\Http\JsonResponse;

class UpdateProductController extends Controller
{
    public function updateProduct(UpdateProductAction $action, UpdateProductRequest $request, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }

}
