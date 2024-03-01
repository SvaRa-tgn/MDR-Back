<?php

namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\ColorAction;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    public function color(ColorAction $action)
    {
        return $action->execute();
    }

}
