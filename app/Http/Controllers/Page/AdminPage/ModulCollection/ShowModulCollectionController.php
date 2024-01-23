<?php


namespace App\Http\Controllers\Page\AdminPage\ModulCollection;

use App\Actions\Admin\ModulCollection\ModulCollectionAction;

class ShowModulCollectionController extends ModulCollectionAction
{
    public function modulCollection(ModulCollectionAction $action)
    {
        return $action->execute();
    }

}
