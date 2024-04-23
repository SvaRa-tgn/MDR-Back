<?php

namespace App\Actions\Admin\ItemCollection;

use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use App\Services\Admin\ItemCollection\ItemEditCollectionService;
use Illuminate\View\View;

class EditItemCollectionAction
{
    public function __construct(private ItemCollectionRepository $repository, private ItemEditCollectionService $service){}

    public function execute(string $slugCollection): View
    {
        $item_collection = $this->repository->editItemCollection($slugCollection);

        $head = $this->service->editTitle($item_collection->collection);

        return view('/app-page/admin-page/admin-box/item-collection/edit-item-collection',
            ['item_collection' => $item_collection, 'head' => $head]);

    }

}
