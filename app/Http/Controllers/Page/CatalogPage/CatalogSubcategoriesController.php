<?php

namespace App\Http\Controllers\Page\CatalogPage;

use App\Actions\CatalogPage\CatalogSubcategoriesAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CatalogSubcategoriesController extends Controller
{
    public function catalogSubcategories(CatalogSubcategoriesAction $action, $category): View
    {
        return $action->execute($category);
    }
}
