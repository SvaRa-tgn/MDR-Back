<?php

namespace App\Actions\Admin\Product;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class DestroyProductAction extends Controller
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id)
    {
        $this->action->destroyProduct($id);

        return response()->Json(route('editProduct'));
    }

}
