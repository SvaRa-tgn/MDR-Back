<?php

namespace App\Actions\Admin\ItemCollection;

use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use App\Services\Admin\ItemCollection\ItemCollectionService;
use Illuminate\View\View;

class ItemCollectionAction
{
    public function __construct(private ItemCollectionRepository $repository, private ItemCollectionService $service){}

    public function execute(): View
    {
        $itemCollections = $this->repository->itemCollection();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/item-collection/item-collection',
            ['itemCollections' => $itemCollections, 'head' => $head]);
    }

}
