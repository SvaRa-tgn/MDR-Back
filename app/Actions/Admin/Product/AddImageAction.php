<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOaddImage;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class AddImageAction
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): JsonResponse
    {
        $product = $this->action->addImage(DTOaddImage::fromAddImageRequest($request), $id);

        if($product->type === 'Комплект'){
            return response()->json(route('editModulCompilation', $product->slug_full_name));
        } else {
            return response()->json(route('editProduct', $product->slug_full_name));
        }
    }

}
