<?php


namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\UpdateImageAction;
use App\Http\Requests\AdminPage\Product\UpdateImageRequest;

class UpdateImageController extends UpdateImageAction
{
    public function updateImage(UpdateImageAction $action, UpdateImageRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
