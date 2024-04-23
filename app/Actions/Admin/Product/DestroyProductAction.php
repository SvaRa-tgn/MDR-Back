<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Services\Admin\DestroyService;
use Illuminate\Http\JsonResponse;

class DestroyProductAction
{
    public function __construct(private DestroyService $service){}

    public function execute(int $id): JsonResponse
    {
        $this->service->destroyProduct(ProductRepository::productFind($id));

        return response()->Json(route('searchEditProduct'));
    }

}
