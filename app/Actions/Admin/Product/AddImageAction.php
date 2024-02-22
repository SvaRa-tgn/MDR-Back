<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOaddImage;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class AddImageAction extends Controller
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id)
    {
        $product = $this->action->addImage(DTOaddImage::fromAddImageRequest($request), $id);

        return response()->json(route('updateProduct', $product->slug_full_name));
    }

}
