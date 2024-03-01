<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SearchProductAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\SearchProductRequest;

class SearchProductController extends Controller
{
    public function searchProduct(SearchProductAction $action, SearchProductRequest $request)
    {
        return $action->execute($request);
    }

}
