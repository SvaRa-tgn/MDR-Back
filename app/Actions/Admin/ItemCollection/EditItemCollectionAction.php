<?php

namespace App\Actions\Admin\ItemCollection;

use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use App\Services\Admin\ItemCollection\ItemEditCollectionService;
use Illuminate\View\View;

class EditItemCollectionAction
{
    public $action;

    private $service;

    public function __construct(ItemCollectionRepository $action, ItemEditCollectionService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute($slug_collection)
    {
        $item_collection = $this->action->editItemCollection($slug_collection);

        if(empty($item_collection) OR $item_collection === null){
            return abort(404);
        } else {
            $head = $this->service->editTitle($item_collection->collection);

            return view ('/app-page/admin-page/admin-box/item-collection/edit-item-collection',
                ['item_collection' => $item_collection, 'head' => $head]);
        }
    }

}
