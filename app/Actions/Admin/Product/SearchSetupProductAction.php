<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOsearchProduct;
use App\Http\Requests\AdminPage\Product\SearchProductRequest;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class SearchSetupProductAction
{
    public function __construct(private ProductRepository $repository){}

    public function execute(SearchProductRequest $request, string $page): JsonResponse
    {
        return response()->json($this->repository->searchSetupProduct(DTOsearchProduct::fromSearchProductRequest($request), $page));
    }

}
