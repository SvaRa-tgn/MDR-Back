<?php

namespace App\Actions\Admin\Sliders;

use App\DTO\DTOaddImage;
use App\DTO\DTOupdateImage;
use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use App\Services\Admin\Sliders\SlidersService;
use Illuminate\Http\JsonResponse;

class UpdateImageSlidersAction
{
    public $action;

    public $service;

    public function __construct(SlidersRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): JsonResponse
    {
        $slider = $this->action->updateImage(DTOupdateImage::fromUpdateImageRequest($request), $id);

        return response()->json(route('setupSlider', $slider->slider));
    }

}
