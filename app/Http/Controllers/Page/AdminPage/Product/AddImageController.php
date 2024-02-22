<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\AddImageAction;
use App\Http\Requests\AdminPage\Product\AddImageRequest;

class AddImageController extends AddImageAction
{
    public function addImage(AddImageAction $action, AddImageRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
