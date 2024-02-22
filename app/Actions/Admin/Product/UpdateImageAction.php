<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOupdateImage;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class UpdateImageAction extends Controller
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id)
    {
        $product = $this->action->updateImage(DTOupdateImage::fromUpdateImageRequest($request), $id);

        return response()->Json(route('updateProduct', $product->slug_full_name));
    }

}
