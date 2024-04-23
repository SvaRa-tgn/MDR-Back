<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\UpdateImageAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\UpdateImageRequest;
use Illuminate\Http\JsonResponse;

class UpdateImageController extends Controller
{
    public function updateImage(UpdateImageAction $action, UpdateImageRequest $request, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }

}
