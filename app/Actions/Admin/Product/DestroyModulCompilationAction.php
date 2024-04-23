<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\ModulCompilation\ModulCompilationRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Services\Admin\DestroyService;
use Illuminate\Http\JsonResponse;

class DestroyModulCompilationAction
{
    public function __construct(private ModulCompilationRepository $modul, private DestroyService $service){}

    public function execute(int $id): JsonResponse
    {
        $this->modul->destroyModulCompilation($id);
        $this->service->destroyProduct(ProductRepository::productFind($id));

        return response()->Json(route('searchEditProduct'));
    }

}
