<?php

namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\UpdateColorAction;
use App\Http\Requests\AdminPage\Color\UpdateColorRequest;

class UpdateColorController extends UpdateColorAction
{
    public function updateColor(UpdateColorAction $action, UpdateColorRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
