<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOsearchProduct;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class SearchProductAction extends Controller
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request)
    {
        $products = $this->action->searchProduct(DTOsearchProduct::fromSearchProductRequest($request));

        return response()->json($products);
    }

}
