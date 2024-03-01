<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOupdateProduct;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class UpdateDataAction
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): JsonResponse
    {
        $product = $this->action->updateData(DTOupdateProduct::fromUpdateProductRequest($request), $id);

        return response()->json(route('updateProduct', $product->slug_full_name));
    }

}
