<?php

namespace App\Http\Controllers\Page\AdminPage\Sliders;

use App\Actions\Admin\Sliders\UpdateImageSlidersAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\UpdateImageRequest;
use Illuminate\Http\JsonResponse;

class UpdateImageSlidersController extends Controller
{
    public function updateImage(UpdateImageSlidersAction $action, UpdateImageRequest $request, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }

}
