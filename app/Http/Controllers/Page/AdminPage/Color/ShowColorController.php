<?php

namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\ColorAction;

class ShowColorController extends ColorAction
{
    public function showColor(ColorAction $action)
    {
        return  $action->execute();
    }

}
