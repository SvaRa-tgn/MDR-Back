<?php

namespace App\Http\Controllers\Page\AdminPage\ReadyCollection;

use App\Actions\Admin\ReadyCollection\CreateReadyCollectionAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\ReadyCollection\ReadyCollectionRequest;

class CreateReadyCollectionController extends Controller
{
    public function createReadyCollection(CreateReadyCollectionAction $action, ReadyCollectionRequest $request)
    {
        return $action->execute($request);
    }

}
