<?php

namespace App\Http\Controllers\Page\AdminPage\ItemCollection;

use App\Actions\Admin\ItemCollection\ItemCollectionAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ItemCollectionController extends Controller
{
    public function itemCollection(ItemCollectionAction $action): View
    {
        return $action->execute();
    }

}
