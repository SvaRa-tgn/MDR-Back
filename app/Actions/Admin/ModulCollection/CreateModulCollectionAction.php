<?php

namespace App\Actions\Admin\ModulCollection;

use App\DTO\DTOmodulCollection;
use App\Repositories\Page\AdminPage\ModulCollection\ModulCollectionRepository;
use Illuminate\Http\RedirectResponse;

class CreateModulCollectionAction
{
    public $action;

    public function __construct(ModulCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request): RedirectResponse
    {
        $this->action->createModulCollection(DTOmodulCollection::fromModulCollectionRequest($request));

        return redirect()->route('modulCollection');
    }

}
