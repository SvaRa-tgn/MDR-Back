<?php

namespace App\Actions\Admin\ReadyCollection;

use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;
use Illuminate\Http\JsonResponse;

class DestroyReadyCollectionAction
{
    public $action;

    public function __construct(ReadyCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id): JsonResponse
    {
        $this->action->destroyReadyCollection($id);

        return response()->json(route('readyCollection'));
    }

}
