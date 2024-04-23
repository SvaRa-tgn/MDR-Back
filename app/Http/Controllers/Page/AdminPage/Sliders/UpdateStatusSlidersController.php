<?php

namespace App\Http\Controllers\Page\AdminPage\Sliders;

use App\Actions\Admin\Sliders\UpdateStatusSlidersAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\UpdateStatusRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class UpdateStatusSlidersController extends Controller
{
    public function updateStatus(UpdateStatusSlidersAction $action, UpdateStatusRequest $request, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }

}
