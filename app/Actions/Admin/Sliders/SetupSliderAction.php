<?php

namespace App\Actions\Admin\Sliders;

use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use App\Services\Admin\Sliders\SetupSliderService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\View\View;

class SetupSliderAction
{
    public $action;

    public $service;

    public function __construct(SlidersRepository $action, SetupSliderService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute($slider): View
    {
        $images = $this->action->image();

        $slider = $this->action->setupSlider($slider);

        $count = $this->action->countImage();

        $head = $this->service->editTitle($slider->name);

        if($slider->slider === 'flicker'){
            $return = view ('/app-page/admin-page/admin-box/sliders/slider-flicker', ['slider' => $slider, 'images' => $images, 'head' => $head]);
        } elseif ($slider->slider === 'move'){
            $return = view ('/app-page/admin-page/admin-box/sliders/slider-move', ['count' => $count, 'slider' => $slider, 'images' => $images, 'head' => $head]);
        }

        return $return;
    }

}
