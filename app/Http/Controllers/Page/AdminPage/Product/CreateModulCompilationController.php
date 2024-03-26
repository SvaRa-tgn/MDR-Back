<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\CreateModulCompilationAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\CreateModulCompilationRequest;
use Illuminate\Http\JsonResponse;

class CreateModulCompilationController extends Controller
{
    public function addCompilation(CreateModulCompilationAction $action, CreateModulCompilationRequest $request): JsonResponse
    {
        return $action->execute($request);
    }

}
