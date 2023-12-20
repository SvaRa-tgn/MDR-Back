<?php

namespace App\Actions\Admin\ReadyCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;

class DestroyReadyCollectionAction extends Controller
{
    public $action;

    public function __construct(ReadyCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id)
    {
        $this->action->destroyReadyCollection($id);

        return redirect()->route('readyCollection.show')->with('success', 'Готовая коллекция удалена');
    }

}
