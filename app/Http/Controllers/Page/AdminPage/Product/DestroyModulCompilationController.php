<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\DestroyModulCompilationAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class DestroyModulCompilationController extends Controller
{
    public function destroyModulCompilation(DestroyModulCompilationAction $action, int $id): JsonResponse
    {
        return $action->execute($id);
    }

}
