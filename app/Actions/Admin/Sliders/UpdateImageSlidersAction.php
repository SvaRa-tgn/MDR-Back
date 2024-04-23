<?php

namespace App\Actions\Admin\Sliders;

use App\DTO\DTOupdateImage;
use App\Http\Requests\AdminPage\Product\UpdateImageRequest;
use App\Repositories\Page\AdminPage\SliderImage\SliderImageRepository;
use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use Illuminate\Http\JsonResponse;

class UpdateImageSlidersAction
{
    public function __construct(private SlidersRepository $slider, private SliderImageRepository $image){}

    public function execute(UpdateImageRequest $request, int $id): JsonResponse
    {
        $dto = DTOupdateImage::fromUpdateImageRequest($request);
        $slider = $this->slider->sliderFind($dto->id);
        $image = $this->image->imageFind($id);
        $this->image->updateImage($dto, $image);

        return response()->json(route('setupSlider', $slider->slider));
    }

}
