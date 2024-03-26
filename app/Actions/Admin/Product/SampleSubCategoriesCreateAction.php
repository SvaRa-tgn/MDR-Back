<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use Illuminate\Http\JsonResponse;

class SampleSubCategoriesCreateAction
{
    public $action;

    public function __construct(SubCategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id, $type): JsonResponse
    {
        $subcategories = $this->action->sampleSubCategoriesCreate($id, $type);

        return response()->json($subcategories);
    }

}
