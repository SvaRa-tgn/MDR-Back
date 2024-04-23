<?php

namespace App\Http\Controllers\Page\AdminPage\Sliders;

use App\Actions\Admin\Sliders\DestroyImageSlidersAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\DestroyImageRequest;
use Illuminate\Http\JsonResponse;

class DestroyImageSlidersController extends Controller
{
    public function destroyImage(DestroyImageSlidersAction $action, DestroyImageRequest $request, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }

}
