<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SampleSubCategoriesCreateAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class SampleSubCategoriesCreateController extends Controller
{
    public function sampleSubCategoriesCreate(SampleSubCategoriesCreateAction $action, int $id, string $type): JsonResponse
    {
        return $action->execute($id, $type);
    }

}
