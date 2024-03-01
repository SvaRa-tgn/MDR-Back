<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class SampleSubCategoriesAction
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id): JsonResponse
    {
        $subcategories = $this->action->sample($id);

        return response()->json($subcategories);
    }

}
