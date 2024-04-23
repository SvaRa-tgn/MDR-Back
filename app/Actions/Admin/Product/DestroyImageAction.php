<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOdestroyImage;
use App\Http\Requests\AdminPage\Product\DestroyImageRequest;
use App\Repositories\Page\AdminPage\Image\ImageRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class DestroyImageAction
{
    public function __construct(private ImageRepository $image){}

    public function execute(DestroyImageRequest $request, int $id): JsonResponse
    {
        $product = ProductRepository::productFind(DTOdestroyImage::fromDestroyImageRequest($request)->id);

        $this->image->destroyImageSingle($id);

        if($product->type === 'Комплект'){
            return response()->json(route('editModulCompilation', $product->slug_full_name));
        } else {
            return response()->json(route('editProduct', $product->slug_full_name));
        }
    }

}
