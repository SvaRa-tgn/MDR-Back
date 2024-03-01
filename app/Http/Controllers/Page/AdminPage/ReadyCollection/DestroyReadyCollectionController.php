<?php

namespace App\Http\Controllers\Page\AdminPage\ReadyCollection;

use App\Actions\Admin\ReadyCollection\DestroyReadyCollectionAction;
use App\Http\Controllers\Controller;

class DestroyReadyCollectionController extends Controller
{
    public function destroyReadyCollection(DestroyReadyCollectionAction $action, $id)
    {
        return $action->execute($id);
    }

}
