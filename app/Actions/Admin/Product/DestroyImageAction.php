<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOdestroyImage;
use App\DTO\DTOupdateStatus;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class DestroyImageAction extends Controller
{
    public $action;

    private ProductRepository $productRepository;

    public function __construct(ProductRepository $action, ProductRepository $productRepository)
    {
        $this->action = $action;
        $this->productRepository = $productRepository;
    }

    public function execute($request, $id)
    {
        $product = $this->action->destroyImage(DTOdestroyImage::fromDestroyImageRequest($request), $id);

        return redirect()->route('updateProduct', $product->slug_full_name)->with('success', 'Фото удалено');
    }

}
