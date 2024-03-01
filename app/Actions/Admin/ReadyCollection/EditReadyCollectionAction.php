<?php

namespace App\Actions\Admin\ReadyCollection;

use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;
use App\Services\Admin\ReadyCollection\EditReadyCollectionService;

class EditReadyCollectionAction
{
    public $action;

    private $service;

    public function __construct(ReadyCollectionRepository $action, EditReadyCollectionService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute($slug_ready_collection)
    {
        $ready_collection = $this->action->editReadyCollection($slug_ready_collection);

        if(empty($ready_collection) OR $ready_collection === null){
            return abort(404);
        } else {
            $head = $this->service->editTitle($ready_collection->ready_collection);

            return view ('/app-page/admin-page/admin-box/ready-collection/edit-ready-collection', ['ready_collection' => $ready_collection, 'head' => $head]);
        }
    }
}
