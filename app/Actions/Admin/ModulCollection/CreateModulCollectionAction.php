<?php

namespace App\Actions\Admin\ModulCollection;

use App\DTO\DTOmodulCollection;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ModulCollection\ModulCollectionRepository;

class CreateModulCollectionAction extends Controller
{
    public $action;

    public function __construct(ModulCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request)
    {
        $this->action->createModulCollection(DTOmodulCollection::fromModulCollectionRequest($request));

        return redirect()->route('modulCollection.show')->with('success', 'Модульная коллекция создана');
    }

}
