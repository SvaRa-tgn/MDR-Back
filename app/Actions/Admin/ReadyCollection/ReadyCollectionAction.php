<?php

namespace App\Actions\Admin\ReadyCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;

class ReadyCollectionAction extends Controller
{
    public $action;

    private ReadyCollectionRepository $readyCollectionRepository;

    public function __construct(ReadyCollectionRepository $action, ReadyCollectionRepository $readyCollectionRepository)
    {
        $this->action = $action;
        $this->readyCollectionRepository = $readyCollectionRepository;
    }

    public function execute()
    {
        $readyCollections = $this->readyCollectionRepository->showReadyCollection();

        $head = [
            'title' => 'Админка - Готовая коллекция. MDR',
            'description' => 'Админка - Создание, правки и удаления Готовых коллекций'
        ];

        return view ('/app-page/admin-page/admin-box/ready-collection/ready-collection',
            ['readyCollections' => $readyCollections, 'head' => $head]);
    }

}
