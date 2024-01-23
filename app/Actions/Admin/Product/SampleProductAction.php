<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOsampleProduct;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class SampleProductAction extends Controller
{
    public $action;

    private ProductRepository $productRepository;

    public function __construct(ProductRepository $action, ProductRepository $productRepository)
    {
        $this->action = $action;
        $this->productRepository = $productRepository;
    }

    public function execute($request)
    {
        $products = $this->action->sampleProducts(DTOsampleProduct::fromSampleProductRequest($request));

        return response()->json($products);
    }

}
