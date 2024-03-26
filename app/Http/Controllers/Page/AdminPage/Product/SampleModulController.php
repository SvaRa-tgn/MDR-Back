<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SampleModulAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class SampleModulController extends Controller
{
    public function sampleModul(SampleModulAction $action, $id): JsonResponse
    {
        return $action->execute($id);
    }

}
