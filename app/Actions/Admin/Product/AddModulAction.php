<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOaddModul;
use App\Http\Requests\AdminPage\Product\AddModulRequest;
use App\Repositories\Page\AdminPage\ModulCompilation\ModulCompilationRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class AddModulAction
{
    public function __construct(private ProductRepository $product, private ModulCompilationRepository $modul){}

    public function execute(AddModulRequest $request, int $id): JsonResponse
    {
        $product = ProductRepository::productFind($id);

        $modul = ProductRepository::productFind(DTOaddModul::fromAddModulRequest($request)->modul_item);

        $this->modul->addModul($modul, $id);

        $this->product->productAddModul($product, $modul);

        return response()->json(route('editModulCompilation', $product->slug_full_name));
    }

}
