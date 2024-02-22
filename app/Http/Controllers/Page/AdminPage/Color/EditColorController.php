<?php

namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\EditColorAction;

class EditColorController extends EditColorAction
{
    public function editColor(EditColorAction $action, $slug_color)
    {
        return $action->execute($slug_color);
    }

}
