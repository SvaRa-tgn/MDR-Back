<?php

namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\ColorAction;

class ColorController extends ColorAction
{
    public function color(ColorAction $action)
    {
        return  $action->execute();
    }

}
