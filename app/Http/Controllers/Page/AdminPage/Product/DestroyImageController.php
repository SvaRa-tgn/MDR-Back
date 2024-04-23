<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\DestroyImageAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\DestroyImageRequest;
use Illuminate\Http\JsonResponse;

class DestroyImageController extends Controller
{
    public function destroyImage(DestroyImageAction $action, DestroyImageRequest $request, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }

}
