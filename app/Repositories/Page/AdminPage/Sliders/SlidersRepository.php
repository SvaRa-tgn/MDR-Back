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
    public function sliderFind(int $id): Slider
    {
        return Slider::find($id);
    }

    public function sliders(): Collection
    {
        return Slider::all()->sortBy('id');
    }

    public function setupSlider(string $slider): Slider
    {
        return Slider::where('slider', $slider)->first();
    }

    public function updateStatus(DTOupdateStatus $dto, int $id): Slider
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

    public function activeSlider(): Slider| null
    {
        return Slider::where('status', 'active')->first();
    }

}
