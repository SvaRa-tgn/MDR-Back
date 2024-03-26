<?php

namespace App\Actions\Admin\Sliders;

use App\DTO\DTOdestroyImage;
use App\Http\Requests\AdminPage\Product\DestroyImageRequest;
use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use Illuminate\Http\JsonResponse;

class DestroyImageSlidersAction
{
    public $action;

    public function __construct(SlidersRepository $action)
    {
        $this->action = $action;
    }

    public function execute(DestroyImageRequest $request, $id): JsonResponse
    {
        $slider = $this->action->deleteImage(DTOdestroyImage::fromDestroyImageRequest($request), $id);

        return response()->json(route('setupSlider', $slider->slider));
    }

}
