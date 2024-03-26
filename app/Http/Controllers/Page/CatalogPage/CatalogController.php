<?php

namespace App\Http\Controllers\Page\CatalogPage;

use App\Actions\CatalogPage\CatalogAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function catalogCategory(CatalogAction $action): View
    {
        return $action->execute();
    }
}
