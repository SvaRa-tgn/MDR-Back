<?php

namespace App\Http\Controllers\Page\AdminPage\ReadyCollection;

use App\Actions\Admin\ReadyCollection\UpdateReadyCollectionAction;
use App\Http\Requests\AdminPage\ReadyCollection\ReadyCollectionRequest;

class UpdateReadyCollectionController extends UpdateReadyCollectionAction
{
    public function updateReadyCollection(UpdateReadyCollectionAction $action, ReadyCollectionRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
