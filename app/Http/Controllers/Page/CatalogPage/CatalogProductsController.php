<?php

namespace App\Http\Controllers\Page\CatalogPage;

use App\Actions\CatalogPage\CatalogProductsAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CatalogProductsController extends Controller
{
    public function catalogProducts(CatalogProductsAction $action, string $slugCategory, string $slugSubCategory): View
    {
        return $action->execute($slugCategory, $slugSubCategory);
    }
}
