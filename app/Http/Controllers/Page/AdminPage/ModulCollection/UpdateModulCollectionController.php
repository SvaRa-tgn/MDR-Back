<?php


namespace App\Http\Controllers\Page\AdminPage\ModulCollection;

use App\Actions\Admin\ModulCollection\UpdateModulCollectionAction;
use App\Http\Requests\AdminPage\ModulCollection\ModulCollectionRequest;

class UpdateModulCollectionController extends UpdateModulCollectionAction
{
    public function updateModulCollection(UpdateModulCollectionAction $action, ModulCollectionRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
