<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use Illuminate\Http\JsonResponse;

class SampleSubCategoriesCreateAction
{
    public function __construct(private SubCategoryRepository $subCategory){}

    public function execute(int $id, string $type): JsonResponse
    {
        return response()->json($this->subCategory->sampleSubCategoriesCreate($id, $type));
    }

}
