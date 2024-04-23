<?php

namespace App\Actions\Index;

use App\DTO\DTOsearchProduct;
use App\Http\Requests\AdminPage\Product\SearchProductRequest;
use App\Repositories\Page\Search\ElascticSearchRepository;
use Illuminate\Http\JsonResponse;

class IndexSearchAction
{
    public function __construct(private ElascticSearchRepository $product){}

    public function execute(SearchProductRequest $request): JsonResponse
    {
        $products = $this->product->searchElastic(DTOsearchProduct::fromSearchProductRequest($request));

        return response()->json($products);
    }

}
