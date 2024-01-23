<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOcreateProduct;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class CreateProductAction extends Controller
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request)
    {
        $this->action->createProduct(DTOcreateProduct::fromCreateProductRequest($request));

        return response()->json(route('product'));
    }

}
