<?php

namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\DestroySubCategoryAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DestroySubCategoryController extends DestroySubCategoryAction
{
    public function destroySubCategory(DestroySubCategoryAction $action, $id): JsonResponse
    {
        return $action->execute($id);
    }

}
