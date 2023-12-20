<?php

namespace App\Actions\Admin\ReadyCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;

class UpdateReadyCollectionAction extends Controller
{
    public $action;

    public function __construct(ReadyCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id)
    {
        $ready_collection = $this->action->updateReadyCollection($request, $id );

        return response()->json(route('editReadyCollection.edit', $ready_collection->slug_ready_collection));
    }

}
