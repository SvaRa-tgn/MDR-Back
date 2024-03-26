<?php

namespace App\Actions\Admin\ItemCollection;

use App\DTO\DTOitemCollection;
use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use Illuminate\Http\RedirectResponse;

class CreateItemCollectionAction
{
    public $action;

    public function __construct(ItemCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request): RedirectResponse
    {
        $this->action->createItemCollection(DTOitemCollection::fromItemCollectionRequest($request));

        return redirect()->route('itemCollection');
    }

}
