<?php


namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\UpdateStatusAction;
use App\Http\Requests\AdminPage\Product\UpdateStatusRequest;

class UpdateStatusController extends UpdateStatusAction
{
    public function updateStatus(UpdateStatusAction $action, UpdateStatusRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
