<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOsearchProduct;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class SearchSetupProductAction extends Controller
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $page)
    {
        $products = $this->action->searchSetupProduct(DTOsearchProduct::fromSearchProductRequest($request), $page);

        return response()->json($products);
    }

}
