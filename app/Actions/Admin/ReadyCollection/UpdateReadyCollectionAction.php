<?php

namespace App\Actions\Admin\ReadyCollection;

use App\DTO\DTOreadyCollection;
use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;
use Illuminate\Http\JsonResponse;

class UpdateReadyCollectionAction
{
    public $action;

    public function __construct(ReadyCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): JsonResponse
    {
        $ready_collection = $this->action->updateReadyCollection(DTOreadyCollection::fromReadyCollectionRequest($request), $id);

        return response()->json(route('editReadyCollection', $ready_collection->slug_ready_collection));
    }

}
