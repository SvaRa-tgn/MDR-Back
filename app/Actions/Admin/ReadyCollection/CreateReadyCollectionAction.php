<?php

namespace App\Actions\Admin\ReadyCollection;

use App\DTO\DTOreadyCollection;
use App\Repositories\Page\AdminPage\ReadyCollection\ReadyCollectionRepository;
use Illuminate\Http\RedirectResponse;

class CreateReadyCollectionAction
{
    public $action;

    public function __construct(ReadyCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request): RedirectResponse
    {
        $this->action->createReadyCollection(DTOreadyCollection::fromReadyCollectionRequest($request));

        return redirect()->route('readyCollection');
    }

}
