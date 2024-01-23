<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOdestroyImage;
use App\DTO\DTOupdateStatus;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class DestroyProductAction extends Controller
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
        $this->action->destroyProduct($id);

        return redirect()->route('editProduct')->with('success', 'Товар удален');
    }

}
