<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\AddImageAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\AddImageRequest;
use Illuminate\Http\JsonResponse;

class AddImageController extends Controller
{
    public function addImage(AddImageAction $action, AddImageRequest $request, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }

}
