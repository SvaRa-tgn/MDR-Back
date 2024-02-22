<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOsampleProduct;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class SampleProductAction extends Controller
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request)
    {
        $products = $this->action->sampleProducts(DTOsampleProduct::fromSampleProductRequest($request));

        return response()->json($products);
    }

}
