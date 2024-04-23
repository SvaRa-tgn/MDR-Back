<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\DestroyModulAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class DestroyModulController extends Controller
{
    public function destroyModul(DestroyModulAction $action, int $id, int $productId): JsonResponse
    {
        return $action->execute($id, $productId);
    }

}
