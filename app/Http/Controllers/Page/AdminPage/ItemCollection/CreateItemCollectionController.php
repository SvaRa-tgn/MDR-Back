<?php

namespace App\Http\Controllers\Page\AdminPage\ItemCollection;

use App\Actions\Admin\ItemCollection\CreateItemCollectionAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\ItemCollection\ItemCollectionRequest;
use Illuminate\Http\RedirectResponse;

class CreateItemCollectionController extends Controller
{
    public function createCollection(CreateItemCollectionAction $action, ItemCollectionRequest $request): RedirectResponse
    {
        return $action->execute($request);
    }

}
