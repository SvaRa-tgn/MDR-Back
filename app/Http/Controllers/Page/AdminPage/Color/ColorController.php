<?php

namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\ColorAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ColorController extends Controller
{
    public function color(ColorAction $action): View
    {
        return $action->execute();
    }

}
