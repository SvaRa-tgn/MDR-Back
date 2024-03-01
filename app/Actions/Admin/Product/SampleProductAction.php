<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOsampleProduct;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class SampleProductAction
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request): JsonResponse
    {
        $products = $this->action->sampleProducts(DTOsampleProduct::fromSampleProductRequest($request));

        return response()->json($products);
    }

}
