<?php

namespace App\Http\Controllers\Page\AdminPage\Sliders;

use App\Actions\Admin\Sliders\SetupSliderAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class SetupSliderController extends Controller
{
    public function setupSlider(SetupSliderAction $action, string $slider): View
    {
        return $action->execute($slider);
    }

}
