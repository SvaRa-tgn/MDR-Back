<?php


namespace App\Http\Controllers\Page\AdminPage\ReadyCollection;

use App\Actions\Admin\ReadyCollection\ReadyCollectionAction;

class ShowReadyCollectionController extends ReadyCollectionAction
{
    public function readyCollection(ReadyCollectionAction $action)
    {
        return $action->execute();
    }

}
