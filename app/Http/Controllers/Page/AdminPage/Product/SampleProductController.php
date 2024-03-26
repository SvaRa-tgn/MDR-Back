<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SampleProductAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\SampleProductRequest;
use Illuminate\Http\JsonResponse;

class SampleProductController extends Controller
{
    public function sampleProducts(SampleProductAction $action, SampleProductRequest $request): JsonResponse
    {
        return $action->execute($request);
    }

}
