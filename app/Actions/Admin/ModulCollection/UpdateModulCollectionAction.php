<?php

namespace App\Actions\Admin\ModulCollection;

use App\DTO\DTOmodulCollection;
use App\Repositories\Page\AdminPage\ModulCollection\ModulCollectionRepository;
use Illuminate\Http\JsonResponse;

class UpdateModulCollectionAction
{
    public $action;

    public function __construct(ModulCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): JsonResponse
    {
        $modul_collection = $this->action->updateModulCollection(DTOmodulCollection::fromModulCollectionRequest($request), $id );

        return response()->json(route('editModulCollection', $modul_collection->slug_modul_collection));
    }

}
