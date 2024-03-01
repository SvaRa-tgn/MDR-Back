<?php

namespace App\Http\Controllers\Page\AdminPage\ReadyCollection;

use App\Actions\Admin\ReadyCollection\EditReadyCollectionAction;
use App\Http\Controllers\Controller;

class EditReadyCollectionController extends Controller
{
    public function editReadyCollection(EditReadyCollectionAction $action, $slug_ready_collection)
    {
        return $action->execute($slug_ready_collection);
    }

}
