<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOupdateImage;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class UpdateImageAction
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): JsonResponse
    {
        $product = $this->action->updateImage(DTOupdateImage::fromUpdateImageRequest($request), $id);

        return response()->Json(route('updateProduct', $product->slug_full_name));
    }

}
