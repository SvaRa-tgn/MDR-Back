<?php


namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\UpdateDataAction;
use App\Http\Requests\AdminPage\Product\UpdateProductRequest;

class UpdateDataController extends UpdateDataAction
{
    public function updateData(UpdateDataAction $action, UpdateProductRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
