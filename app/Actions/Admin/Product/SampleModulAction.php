<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class SampleModulAction
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id): JsonResponse
    {
        $moduls = $this->action->sampleModul($id);

        return response()->json($moduls);
    }

}
