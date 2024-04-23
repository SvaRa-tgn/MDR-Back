<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOupdateProduct;
use App\Http\Requests\AdminPage\Product\UpdateProductRequest;
use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class UpdateProductAction
{
    public function __construct(private ProductRepository $product){}

    public function execute(UpdateProductRequest $request, int $id): JsonResponse
    {
        $product = $this->product->updateData(DTOupdateProduct::fromUpdateProductRequest($request), ProductRepository::productFind($id));

        if($product->type === 'Комплект'){
            return response()->json(route('editModulCompilation', $product->slug_full_name));
        } else {
            return response()->json(route('editProduct', $product->slug_full_name));
        }
    }

}
