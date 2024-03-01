<?php

namespace App\Actions\Admin\ReadyCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;
use App\Services\Admin\ReadyCollection\ReadyCollectionService;

class ReadyCollectionAction
{
    public $action;

    private $service;

    public function __construct(ReadyCollectionRepository $action, ReadyCollectionService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute()
    {
        $readyCollections = $this->action->readyCollection();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/ready-collection/ready-collection',
            ['readyCollections' => $readyCollections, 'head' => $head]);
    }

}
