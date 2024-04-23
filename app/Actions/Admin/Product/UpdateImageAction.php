<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOupdateImage;
use App\Http\Requests\AdminPage\Product\UpdateImageRequest;
use App\Repositories\Page\AdminPage\Image\ImageRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class UpdateImageAction
{
    public function __construct(private ImageRepository $image){}

    public function execute(UpdateImageRequest $request, int $id): JsonResponse
    {
        $dto = DTOupdateImage::fromUpdateImageRequest($request);

        $product = ProductRepository::productFind($dto->id);

        $this->image->updateImage($dto, $id);

        if($product->type === 'Комплект'){
            return response()->json(route('editModulCompilation', $product->slug_full_name));
        } else {
            return response()->json(route('editProduct', $product->slug_full_name));
        }
    }

}
