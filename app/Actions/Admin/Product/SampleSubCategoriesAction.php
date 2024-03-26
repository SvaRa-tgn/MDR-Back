<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use Illuminate\Http\JsonResponse;

class SampleSubCategoriesAction
{
    public $action;

    public function __construct(SubCategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id): JsonResponse
    {
        $subcategories = $this->action->sampleSubCategories($id);

        return response()->json($subcategories);
    }

}
