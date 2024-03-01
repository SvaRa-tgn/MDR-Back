<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SearchSetupProductAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\SearchProductRequest;

class SearchSetupProductController extends Controller
{
    public function searchSetupProduct(SearchSetupProductAction $action, SearchProductRequest $request, $page)
    {
        return $action->execute($request, $page);
    }

}
