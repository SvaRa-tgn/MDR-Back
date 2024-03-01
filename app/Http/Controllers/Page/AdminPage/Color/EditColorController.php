<?php

namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\EditColorAction;
use App\Http\Controllers\Controller;

class EditColorController extends Controller
{
    public function editColor(EditColorAction $action, $slug_color)
    {
        return $action->execute($slug_color);
    }

}
