<?php

namespace App\Actions\Admin\ItemCollection;

use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use App\Services\Admin\ItemCollection\ItemCollectionService;
use Illuminate\View\View;

class ItemCollectionAction
{
    public $action;

    private $service;

    public function __construct(ItemCollectionRepository $action, ItemCollectionService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute(): View
    {
        $itemCollections = $this->action->itemCollection();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/item-collection/item-collection',
            ['itemCollections' => $itemCollections, 'head' => $head]);
    }

}
