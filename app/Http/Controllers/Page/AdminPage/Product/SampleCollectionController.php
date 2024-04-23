<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SampleCollectionAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class SampleCollectionController extends Controller
{
    public function sampleCollection(SampleCollectionAction $action, string $type): JsonResponse
    {
        return $action->execute($type);
    }

}
