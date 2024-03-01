<?php


namespace App\Http\Controllers\Page\AdminPage\ModulCollection;

use App\Actions\Admin\ModulCollection\ModulCollectionAction;
use App\Http\Controllers\Controller;

class ModulCollectionController extends Controller
{
    public function modulCollection(ModulCollectionAction $action)
    {
        return $action->execute();
    }

}
