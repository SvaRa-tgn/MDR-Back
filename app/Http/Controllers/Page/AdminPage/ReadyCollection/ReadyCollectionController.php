<?php

namespace App\Http\Controllers\Page\AdminPage\ReadyCollection;

use App\Actions\Admin\ReadyCollection\ReadyCollectionAction;
use App\Http\Controllers\Controller;

class ReadyCollectionController extends Controller
{
    public function readyCollection(ReadyCollectionAction $action)
    {
        return $action->execute();
    }

}
