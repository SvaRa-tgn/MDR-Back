<?php

namespace App\Http\Controllers\Page\AdminPage\ModulCollection;

use App\Actions\Admin\ModulCollection\EditModulCollectionAction;
use App\Http\Controllers\Controller;

class EditModulCollectionController extends Controller
{
    public function editModulCollection(EditModulCollectionAction $action, $slug_modul_collection)
    {
        return $action->execute($slug_modul_collection);
    }

}
