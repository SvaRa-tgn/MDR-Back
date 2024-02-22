<?php

namespace App\Actions\Admin\ReadyCollection;

use App\DTO\DTOreadyCollection;
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
        $ready_collection = $this->action->updateReadyCollection(DTOreadyCollection::fromReadyCollectionRequest($request), $id);

        return response()->json(route('editReadyCollection', $ready_collection->slug_ready_collection));
    }

}
