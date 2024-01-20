<?php

namespace App\Actions\Admin\Product;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class SampleAction extends Controller
{
    public $action;

    private ProductRepository $productRepository;

    public function __construct(ProductRepository $action, ProductRepository $productRepository)
    {
        $this->action = $action;
        $this->productRepository = $productRepository;
    }

    public function execute($id)
    {
        $subcategories = $this->productRepository->Sample($id);

        //return view ('/app-page/admin-page/admin-box/product/product', ['subcategories' => $subcategories]);
        return response()->json($subcategories);
    }

}
