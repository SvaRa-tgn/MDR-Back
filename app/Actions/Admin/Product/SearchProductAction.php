<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOsearchProduct;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class SearchProductAction
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request): JsonResponse
    {
        $products = $this->action->searchProduct(DTOsearchProduct::fromSearchProductRequest($request));

        return response()->json($products);
    }

}
