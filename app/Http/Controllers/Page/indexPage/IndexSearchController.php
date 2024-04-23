<?php

namespace App\Http\Controllers\Page\indexPage;

use App\Actions\Index\IndexSearchAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\SearchProductRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class IndexSearchController extends Controller
{
    public function searchIndex(IndexSearchAction $action, SearchProductRequest $request): JsonResponse
    {
        return $action->execute($request);
    }
}
