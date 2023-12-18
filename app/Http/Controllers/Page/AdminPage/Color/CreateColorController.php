<?php


namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\CreateColorAction;
use App\Http\Requests\AdminPage\Color\CreateColorRequest;

class CreateColorController extends CreateColorAction
{
    public function createColor(CreateColorAction $action,CreateColorRequest $request)
    {
        return $action->execute($request);
    }

}
