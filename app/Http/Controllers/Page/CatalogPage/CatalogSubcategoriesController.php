<?php

namespace App\Http\Controllers\Page\CatalogPage;

use App\Actions\CatalogPage\CatalogSubcategoriesAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CatalogSubcategoriesController extends Controller
{
    public function catalogSubcategories(CatalogSubcategoriesAction $action, string $slugCategory): View
    {
        return $action->execute($slugCategory);
    }
}
