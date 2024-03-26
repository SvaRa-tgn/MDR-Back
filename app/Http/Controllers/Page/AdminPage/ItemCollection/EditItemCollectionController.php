<?php

namespace App\Http\Controllers\Page\AdminPage\ItemCollection;

use App\Actions\Admin\ItemCollection\EditItemCollectionAction;
use App\Http\Controllers\Controller;

class EditItemCollectionController extends Controller
{
    public function editCollection(EditItemCollectionAction $action, $slug_collection)
    {
        return $action->execute($slug_collection);
    }

}
