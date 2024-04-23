<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOaddImage;
use App\Http\Requests\AdminPage\Product\AddImageRequest;
use App\Repositories\Page\AdminPage\Image\ImageRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class AddImageAction
{
    public function __construct(private ImageRepository $image){}

    public function execute(AddImageRequest $request, int $id): JsonResponse
    {
        $product = ProductRepository::productFind($id);

        $this->image->addSingleImage(DTOaddImage::fromAddImageRequest($request), $product);

        if($product->type === 'Комплект'){
            return response()->json(route('editModulCompilation', $product->slug_full_name));
        } else {
            return response()->json(route('editProduct', $product->slug_full_name));
        }
    }

}
