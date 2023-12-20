<?php


namespace App\Http\Controllers\Page\AdminPage\ModulCollection;

use App\Actions\Admin\ModulCollection\DestroyModulCollectionAction;
use Illuminate\Http\Request;

class DestroyModulCollectionController extends DestroyModulCollectionAction
{
    public function destroyModulCollection(DestroyModulCollectionAction $action, Request $request, $id)
    {
        return $action->execute($id);
    }

}
