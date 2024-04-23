<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class SampleModulAction
{
    public function __construct(private ProductRepository $repository){}

    public function execute(int $id): JsonResponse
    {
        return response()->json($this->repository->sampleModul($id));
    }

}
