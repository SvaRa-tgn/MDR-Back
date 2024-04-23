<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use Illuminate\Http\JsonResponse;

class SampleSubCategoriesAction
{
    public function __construct(private SubCategoryRepository $subCategory){}

    public function execute(int $id): JsonResponse
    {
        return response()->json($this->subCategory->sampleSubCategories($id));
    }

}
