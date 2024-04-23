<?php

namespace App\Actions\Admin\ItemCollection;

use App\DTO\DTOupdateItemCollection;
use App\Http\Requests\AdminPage\ItemCollection\UpdateItemCollectionRequest;
use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use Illuminate\Http\JsonResponse;

class UpdateItemCollectionAction
{
    public function __construct(private ItemCollectionRepository $repository){}

    public function execute(UpdateItemCollectionRequest $request, int $id): JsonResponse
    {
        $item_collection = $this->repository->updateItemCollection(DTOupdateItemCollection::fromUpdateItemCollectionRequest($request), $id );

        return response()->json(route('editCollection', $item_collection->slug_collection));
    }

}
