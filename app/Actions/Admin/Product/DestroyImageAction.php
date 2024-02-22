<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOdestroyImage;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class DestroyImageAction extends Controller
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id)
    {
        $product = $this->action->destroyImage(DTOdestroyImage::fromDestroyImageRequest($request), $id);

        return response()->Json(route('updateProduct', $product->slug_full_name));
    }

}
