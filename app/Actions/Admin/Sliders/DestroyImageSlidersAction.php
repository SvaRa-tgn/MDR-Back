<?php

namespace App\Actions\Admin\Sliders;

use App\DTO\DTOdestroyImage;
use App\Http\Requests\AdminPage\Product\DestroyImageRequest;
use App\Repositories\Page\AdminPage\SliderImage\SliderImageRepository;
use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use Illuminate\Http\JsonResponse;

class DestroyImageSlidersAction
{
    public function __construct(private SlidersRepository $slider, private SliderImageRepository $image){}

    public function execute(DestroyImageRequest $request, int $id): JsonResponse
    {
        $dto = DTOdestroyImage::fromDestroyImageRequest($request);
        $slider = $this->slider->sliderFind($dto->id);
        $image = $this->image->imageFind($id);
        $this->image->deleteImage($image);

        return response()->json(route('setupSlider', $slider->slider));
    }

}
