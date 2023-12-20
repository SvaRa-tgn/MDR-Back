<?php


namespace App\Http\Controllers\Page\AdminPage\ReadyCollection;

use App\Actions\Admin\ReadyCollection\EditReadyCollectionAction;

class EditReadyCollectionController extends EditReadyCollectionAction
{
    public function editReadyCollection(EditReadyCollectionAction $action, $slug_ready_collection)
    {
        return $action->execute($slug_ready_collection);
    }

}
