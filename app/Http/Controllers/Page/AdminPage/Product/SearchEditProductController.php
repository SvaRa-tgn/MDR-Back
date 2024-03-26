<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SearchEditProductAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class SearchEditProductController extends Controller
{
    public function searchEditProduct(SearchEditProductAction $action): View
    {
        return $action->execute();
    }

}
