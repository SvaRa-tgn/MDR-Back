<?php

namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\CreateColorAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Color\CreateColorRequest;
use Illuminate\Http\RedirectResponse;

class CreateColorController extends Controller
{
    public function createColor(CreateColorAction $action, CreateColorRequest $request): RedirectResponse
    {
        return $action->execute($request);
    }

}
