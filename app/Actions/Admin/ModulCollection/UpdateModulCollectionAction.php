<?php

namespace App\Actions\Admin\ModulCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ModulCollection\ModulCollectionRepository;

class UpdateModulCollectionAction extends Controller
{
    public $action;

    public function __construct(ModulCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id)
    {
        $modul_collection = $this->action->updateModulCollection($request, $id );

        return response()->json(route('editModulCollection.edit', $modul_collection->slug_modul_collection));
    }

}
