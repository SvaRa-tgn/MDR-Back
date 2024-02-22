<?php

namespace App\Actions\Admin\Product;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Product\ProductRepository;

class SampleSubCategoriesAction extends Controller
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id)
    {
        $subcategories = $this->action->sample($id);

        return response()->json($subcategories);
    }

}
