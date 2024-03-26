<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\DestroyModulAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\DestroyImageRequest;
use Illuminate\Http\JsonResponse;

class DestroyModulController extends Controller
{
    public function destroyModul(DestroyModulAction $action, $id, $productId): JsonResponse
    {
        return $action->execute($id, $productId);
    }

}
