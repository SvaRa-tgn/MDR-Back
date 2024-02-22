<?php

namespace App\Http\Controllers\Page\AdminPage\ReadyCollection;

use App\Actions\Admin\ReadyCollection\DestroyReadyCollectionAction;
use Illuminate\Http\Request;

class DestroyReadyCollectionController extends DestroyReadyCollectionAction
{
    public function destroyReadyCollection(DestroyReadyCollectionAction $action, $id)
    {
        return $action->execute($id);
    }

}
