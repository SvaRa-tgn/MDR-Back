<?php

namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Actions\Admin\Category\DestroyCategoryAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class DestroyCategoryController extends Controller
{
    public function destroyCategory(DestroyCategoryAction $action, int $id): JsonResponse
    {
        return $action->execute($id);
    }

}
