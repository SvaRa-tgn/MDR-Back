<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\AddModulAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\AddModulRequest;
use Illuminate\Http\JsonResponse;

class AddModulController extends Controller
{
    public function addModul(AddModulAction $action, AddModulRequest $request, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }

}
