<?php


namespace App\Http\Controllers\Page\AdminPage\ModulCollection;

use App\Actions\Admin\ModulCollection\ModulCollectionAction;

class ModulCollectionController extends ModulCollectionAction
{
    public function modulCollection(ModulCollectionAction $action)
    {
        return $action->execute();
    }

}
