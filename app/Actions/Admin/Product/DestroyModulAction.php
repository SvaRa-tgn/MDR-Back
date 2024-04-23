<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\ModulCompilation\ModulCompilationRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class DestroyModulAction
{
    public function __construct(private ModulCompilationRepository $modul, private ProductRepository $product){}

    public function execute(int $id, int $productId): JsonResponse
    {
        $this->modul->destroyModul($id);

        $product = ProductRepository::productFind($productId);

        $moduls = $this->modul->showModulCompilation($product);

        $this->product->updateModul($product, $moduls);

        return response()->json(route('editModulCompilation', $product->slug_full_name));

    }

}
