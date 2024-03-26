<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOcreateProduct;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class CreateProductAction
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request): JsonResponse
    {
        $this->action->createProduct(DTOcreateProduct::fromCreateProductRequest($request));

        return response()->json(route('productCreate'));
    }

}
