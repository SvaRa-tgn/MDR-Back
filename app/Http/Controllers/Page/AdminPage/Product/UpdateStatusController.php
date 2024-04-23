<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\UpdateStatusAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\UpdateStatusRequest;
use Illuminate\Http\RedirectResponse;

class UpdateStatusController extends Controller
{
    public function updateStatus(UpdateStatusAction $action, UpdateStatusRequest $request, int $id): RedirectResponse
    {
        return $action->execute($request, $id);
    }

}
