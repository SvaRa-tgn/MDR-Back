<?php

namespace App\Http\Controllers\Page\AdminPage\Sliders;

use App\Actions\Admin\Sliders\SlidersAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class SlidersController extends Controller
{
    public function sliders(SlidersAction $action): View
    {
        return $action->execute();
    }

}
