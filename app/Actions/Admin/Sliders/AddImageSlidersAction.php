<?php

namespace App\Actions\Admin\Sliders;

use App\DTO\DTOupdateImage;
use App\Http\Requests\AdminPage\Product\UpdateImageRequest;
use App\Repositories\Page\AdminPage\SliderImage\SliderImageRepository;
use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use Illuminate\Http\JsonResponse;

class AddImageSlidersAction
{
    public function __construct(private SlidersRepository $slider, private SliderImageRepository $sliderImage){}

    public function execute(UpdateImageRequest $request): JsonResponse
    {
        $dto = DTOupdateImage::fromUpdateImageRequest($request);
        $slider = $this->slider->sliderFind($dto->id);
        $this->sliderImage->addImage($dto, $slider);

        return response()->json(route('setupSlider', $slider->slider));
    }

}
