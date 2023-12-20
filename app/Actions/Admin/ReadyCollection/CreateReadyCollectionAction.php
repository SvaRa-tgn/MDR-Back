<?php

namespace App\Actions\Admin\ReadyCollection;

use App\DTO\DTOmodulCollection;
use App\DTO\DTOreadyCollection;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;

class CreateReadyCollectionAction extends Controller
{
    public $action;

    public function __construct(ReadyCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request)
    {
        $this->action->createReadyCollection(DTOreadyCollection::fromReadyCollectionRequest($request));

        return redirect()->route('readyCollection.show')->with('success', 'Готовая коллекция создана');
    }

}
