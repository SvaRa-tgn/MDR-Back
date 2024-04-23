<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SearchSetupProductAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\SearchProductRequest;
use Illuminate\Http\JsonResponse;

class SearchSetupProductController extends Controller
{
    public function searchSetupProduct(SearchSetupProductAction $action, SearchProductRequest $request, string $page): JsonResponse
    {
        return $action->execute($request, $page);
    }

}
