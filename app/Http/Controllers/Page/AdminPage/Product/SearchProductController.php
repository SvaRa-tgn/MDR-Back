<?php


namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SearchProductAction;
use App\Http\Requests\AdminPage\Product\SearchProductRequest;

class SearchProductController extends SearchProductAction
{
    public function searchProduct(SearchProductAction $action, SearchProductRequest $request)
    {
        return $action->execute($request);
    }

}
