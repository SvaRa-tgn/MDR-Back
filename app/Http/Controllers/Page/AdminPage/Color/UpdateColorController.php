<?php

namespace App\Http\Controllers\Page\AdminPage\Color;

use App\Actions\Admin\Color\UpdateColorAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Color\UpdateColorRequest;
use Illuminate\Http\JsonResponse;

class UpdateColorController extends Controller
{
    public function updateColor(UpdateColorAction $action, UpdateColorRequest $request, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }

}
