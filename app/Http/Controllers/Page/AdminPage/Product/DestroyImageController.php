<?php


namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\DestroyImageAction;
use App\Http\Requests\AdminPage\Product\DestroyImageRequest;

class DestroyImageController extends DestroyImageAction
{
    public function destroyImage(DestroyImageAction $action, DestroyImageRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
