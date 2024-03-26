<?php

namespace App\Actions\Admin\ItemCollection;

use App\DTO\DTOupdateItemCollection;
use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use Illuminate\Http\JsonResponse;

class UpdateItemCollectionAction
{
    public $action;

    public function __construct(ItemCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): JsonResponse
    {
        $item_collection = $this->action->updateItemCollection(DTOupdateItemCollection::fromUpdateItemCollectionRequest($request), $id );

        return response()->json(route('editCollection', $item_collection->slug_collection));
    }

}
