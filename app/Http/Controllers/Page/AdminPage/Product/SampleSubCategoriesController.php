<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SampleSubCategoriesAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class SampleSubCategoriesController extends Controller
{
    public function sampleSubCategories(SampleSubCategoriesAction $action, int $id): JsonResponse
    {
        return $action->execute($id);
    }

}
