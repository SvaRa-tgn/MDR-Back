<?php

namespace App\Actions\Admin\Sliders;

use App\DTO\DTOupdateImage;
use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use Illuminate\Http\JsonResponse;

class AddImageSlidersAction
{
    public $action;

    public $service;

    public function __construct(SlidersRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request): JsonResponse
    {
       $slider = $this->action->addImage(DTOupdateImage::fromUpdateImageRequest($request));

        return response()->json(route('setupSlider', $slider->slider));
    }

}
