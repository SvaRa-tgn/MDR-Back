<?php

namespace App\Http\Controllers\Page\CatalogPage;

use App\Actions\CatalogPage\CatalogProductPageAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CatalogProductPageController extends Controller
{
    public function productPage(CatalogProductPageAction $action, string $slugCategory, string $slugSubCategory, string $slugFullName): View
    {
        return $action->execute($slugCategory, $slugSubCategory, $slugFullName);
    }
}
