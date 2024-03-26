<?php

namespace App\Http\Controllers\Page\AdminPage\Sliders;

use App\Actions\Admin\Sliders\SetupSliderAction;
use App\Http\Controllers\Controller;

class SetupSliderController extends Controller
{
    public function setupSlider(SetupSliderAction $action, $slider)
    {
        return $action->execute($slider);
    }

}
