<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\DestroyProductAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class DestroyProductController extends Controller
{
    public function destroyProduct(DestroyProductAction $action, int $id): JsonResponse
    {
        return $action->execute($id);
    }

}
