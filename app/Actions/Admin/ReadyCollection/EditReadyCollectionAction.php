<?php

namespace App\Actions\Admin\ReadyCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;

class EditReadyCollectionAction extends Controller
{
    public $action;

    public function __construct(ReadyCollectionRepository $action)

    {
        $this->action = $action;
    }

    public function execute($slug_ready_collection)
    {
        $ready_collection = $this->action->editReadyCollection($slug_ready_collection);

        $head = [
            'title' => 'Админка - Готовая коллекция '. $ready_collection['name'] . '. MDR',
            'description' => 'Админка - Создание, правки и удаления Готовой коллекции'
        ];

        return view ('/app-page/admin-page/admin-box/ready-collection/edit-ready-collection', ['ready_collection' => $ready_collection, 'head' => $head]);
    }

}
