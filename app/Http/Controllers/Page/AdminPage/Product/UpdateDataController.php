<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\UpdateDataAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\UpdateProductRequest;

class UpdateDataController extends Controller
{
    public function updateData(UpdateDataAction $action, UpdateProductRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
