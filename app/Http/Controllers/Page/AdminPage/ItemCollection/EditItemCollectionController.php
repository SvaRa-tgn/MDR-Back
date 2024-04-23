<?php

namespace App\Http\Controllers\Page\AdminPage\ItemCollection;

use App\Actions\Admin\ItemCollection\EditItemCollectionAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class EditItemCollectionController extends Controller
{
    public function editCollection(EditItemCollectionAction $action, $slugCollection): View
    {
        return $action->execute($slugCollection);
    }

}
