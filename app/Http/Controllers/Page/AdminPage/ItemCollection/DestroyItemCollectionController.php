<?php

namespace App\Http\Controllers\Page\AdminPage\ItemCollection;

use App\Actions\Admin\ItemCollection\DestroyItemCollectionAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class DestroyItemCollectionController extends Controller
{
    public function destroyCollection(DestroyItemCollectionAction $action, int $id): JsonResponse
    {
        return $action->execute($id);
    }

}
