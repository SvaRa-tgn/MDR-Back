<?php

namespace App\Repositories\Page\AdminPage\SliderImage;

use App\DTO\DTOdestroyImage;
use App\DTO\DTOupdateImage;
use App\Models\Slider;
use App\Models\SliderImage;
use App\Services\Admin\UpdateStroageService;
use Transliterate;

class SliderImageRepository
{
    public function imageFind(int $id): SliderImage
    {
        return SliderImage::find($id);
    }

    public function addImage(DTOupdateImage $dto, Slider $slider): Slider
    {
        $image = new SliderImage();
        $storage = 'public/slider';
        $res = UpdateStroageService::updateImage($storage, $dto->image);
        $image->path = $res['path'];
        $image->link = $res['url'];

        $count = $slider->imageSlider->count();

        if ($slider->slider === 'move') {
            if($count === 0){
                $image->slider = 2;
            } elseif ($count === 1) {
                $image->slider = 3;
            } elseif ($count === 2){
                $image->slider = 1;
            }
            $image->status = 'top';
        } elseif ($slider->slider === 'flicker' and $count <= 2) {
            $image->status = 'top';
        } elseif ($slider->slider === 'flicker' and $count >= 3) {
            $image->status = 'stock';
        }

        $slider->imageSlider()->save($image);

        return $slider;
    }

    public function updateImage(DTOupdateImage $dto, SliderImage $image): SliderImage
    {
        UpdateStroageService::deleteImage($image->path);
        $storage = 'public/slider';
        $res = UpdateStroageService::updateImage($storage, $dto->image);
        $image->path = $res['path'];
        $image->link = $res['url'];

        $image->save();

        return $image;
    }

    public function deleteImage(SliderImage $image): void
    {
        UpdateStroageService::deleteImage($image->path);
        $image->delete();
    }

}
