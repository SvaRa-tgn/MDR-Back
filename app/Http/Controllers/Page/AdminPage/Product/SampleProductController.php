<?php

namespace App\Http\Controllers\Page\AdminPage\Product;

use App\Actions\Admin\Product\SampleProductAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\Product\SampleProductRequest;

class SampleProductController extends Controller
{
    public function sampleProducts(SampleProductAction $action, SampleProductRequest $request)
    {
        return $action->execute($request);
    }

}
