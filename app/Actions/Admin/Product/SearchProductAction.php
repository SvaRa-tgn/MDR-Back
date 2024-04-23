<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOsearchProduct;
use App\Http\Requests\AdminPage\Product\SearchProductRequest;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class SearchProductAction
{
    public function __construct(private ProductRepository $repository){}

    public function execute(SearchProductRequest $request): JsonResponse
    {
        return response()->json($this->repository->searchProduct(DTOsearchProduct::fromSearchProductRequest($request)));
    }

}
