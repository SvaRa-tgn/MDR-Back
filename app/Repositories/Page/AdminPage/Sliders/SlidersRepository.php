<?php

namespace App\Repositories\Page\AdminPage\Sliders;

use App\DTO\DTOcreateCategory;
use App\DTO\DTOdestroyImage;
use App\DTO\DTOupdateCategory;
use App\DTO\DTOupdateImage;
use App\DTO\DTOupdateStatus;
use App\Models\Category;
use App\Models\Slider;
use App\Models\SliderImage;
use App\Repositories\Page\AdminPage\Category\Interfaces\CategoryRepositoryInterface;
use App\Services\Admin\UpdateStroageService;
use Illuminate\Database\Eloquent\Collection;
use Transliterate;

class SlidersRepository
{
    public function sliders(): Collection
    {
        return Slider::all()->sortBy('id');
    }

    public function setupSlider($slider): Slider
    {
        return Slider::where('slider', $slider)->first();
    }

    public function updateStatus(DTOupdateStatus $dto, $id): Slider
    {
        $deactives = Slider::all();
        foreach ($deactives as $deactive) {
            $deactive->status = 'deactive';
            $deactive->status_page = 'Выключен';
            $deactive->save();
        }

        $slider = Slider::find($id);
        $slider->status = $dto->status;
        $slider->status_page = 'Включен';
        $slider->save();

        return $slider;
    }

    public function image(): array
    {
        return SliderImage::join('sliders', 'sliders.id', '=', 'slider_images.slider_id')
            ->select('slider_images.*', 'sliders.slider')
            ->orderBy('id', 'ASC')->get()->toArray();
    }

    public function countImage(): int
    {
        $slider = Slider::find(2);

        return $slider->imageSlider->count();
    }


    public function addImage(DTOupdateImage $dto): Slider
    {
        $slider = Slider::find($dto->id);

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

    public function updateImage(DTOupdateImage $dto, $id): Slider
    {
        $slider = Slider::find($dto->id);
        $image = SliderImage::find($id);

        UpdateStroageService::deleteImage($image->path);
        $storage = 'public/slider';
        $res = UpdateStroageService::updateImage($storage, $dto->image);
        $image->path = $res['path'];
        $image->link = $res['url'];

        $image->save();

        return $slider;
    }

    public function deleteImage(DTOdestroyImage $dto, $id): Slider
    {
        $slider = Slider::find($dto->id);

        $image = SliderImage::find($id);

        UpdateStroageService::deleteImage($image->path);

        $image->delete();

        return $slider;
    }

    public function activeSlider(): Slider| null
    {
        return Slider::where('status', 'active')->first();
    }

}
