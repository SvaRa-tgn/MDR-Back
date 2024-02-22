<?php

namespace App\Actions\Admin\ReadyCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;
use App\Services\Admin\ReadyCollection\EditReadyCollectionService;

class EditReadyCollectionAction extends Controller
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

        $head = $this->service->title($ready_collection);

        return view ('/app-page/admin-page/admin-box/ready-collection/edit-ready-collection', ['ready_collection' => $ready_collection, 'head' => $head]);
    }

}
