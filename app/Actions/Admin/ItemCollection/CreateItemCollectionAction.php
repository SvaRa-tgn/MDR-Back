<?php

namespace App\Actions\Admin\ItemCollection;

use App\DTO\DTOitemCollection;
use App\Http\Requests\AdminPage\ItemCollection\ItemCollectionRequest;
use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use Illuminate\Http\RedirectResponse;

class CreateItemCollectionAction
{
    public function __construct(private ItemCollectionRepository $repository){}

    public function execute(ItemCollectionRequest $request): RedirectResponse
    {
        $this->repository->createItemCollection(DTOitemCollection::fromItemCollectionRequest($request));

        return redirect()->route('itemCollection');
    }

}
