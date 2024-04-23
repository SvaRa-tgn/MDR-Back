<?php

namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Actions\Admin\SubCategory\DestroySubCategoryAction;
use Illuminate\Http\JsonResponse;

class DestroySubCategoryController extends DestroySubCategoryAction
{
    public function destroySubCategory(DestroySubCategoryAction $action, int $id): JsonResponse
    {
        return $action->execute($id);
    }

}
