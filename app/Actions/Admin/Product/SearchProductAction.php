<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOsearchProduct;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class SearchProductAction extends Controller
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
        $products = $this->productRepository->searchProduct(DTOsearchProduct::fromSearchProductRequest($request));

        return response()->json($products);
    }

}
