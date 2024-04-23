<?php

namespace App\Actions\Admin\Sliders;

use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use App\Services\Admin\Sliders\SetupSliderService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\View\View;

class SetupSliderAction
{
    public function __construct(private SlidersRepository $repository, private SetupSliderService $service){}

    public function execute(string $slider): View
    {
        $images = $this->repository->image();

        $slider = $this->repository->setupSlider($slider);

        $count = $this->repository->countImage();

        $head = $this->service->editTitle($slider->name);

        if($slider->slider === 'flicker'){
            $return = view ('/app-page/admin-page/admin-box/sliders/slider-flicker', ['slider' => $slider, 'images' => $images, 'head' => $head]);
        } elseif ($slider->slider === 'move'){
            $return = view ('/app-page/admin-page/admin-box/sliders/slider-move', ['count' => $count, 'slider' => $slider, 'images' => $images, 'head' => $head]);
        }

        return $return;
    }

}
