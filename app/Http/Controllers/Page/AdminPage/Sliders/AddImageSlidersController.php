<?php

namespace App\Http\Controllers\Page\AdminPage\Sliders;

use App\Actions\Admin\Sliders\AddImageSlidersAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\UpdateImageRequest;
use Illuminate\Http\JsonResponse;

class AddImageSlidersController extends Controller
{
    public function addImage(AddImageSlidersAction $action, UpdateImageRequest $request): JsonResponse
    {
        return $action->execute($request);
    }

}
