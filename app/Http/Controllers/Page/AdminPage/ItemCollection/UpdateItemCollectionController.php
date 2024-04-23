<?php

namespace App\Http\Controllers\Page\AdminPage\ItemCollection;

use App\Actions\Admin\ItemCollection\UpdateItemCollectionAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\ItemCollection\UpdateItemCollectionRequest;
use Illuminate\Http\JsonResponse;

class UpdateItemCollectionController extends Controller
{
    public function updateCollection(UpdateItemCollectionAction $action, UpdateItemCollectionRequest $request, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }

}
