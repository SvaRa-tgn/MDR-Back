<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOsearchProduct;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class SearchSetupProductAction
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $page): JsonResponse
    {
        $products = $this->action->searchSetupProduct(DTOsearchProduct::fromSearchProductRequest($request), $page);

        return response()->json($products);
    }

}
