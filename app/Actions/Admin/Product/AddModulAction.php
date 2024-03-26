<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOaddModul;
use App\Repositories\Page\AdminPage\ModulCompilation\ModulCompilationRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class AddModulAction
{
    public $action;
    public $repository;

    public function __construct(ModulCompilationRepository $action, ProductRepository $repository)
    {
        $this->action = $action;

        $this->repository = $repository;
    }

    public function execute($request, $id): JsonResponse
    {
        $modul_item = $this->repository->productId(DTOaddModul::fromAddModulRequest($request));

        $product = $this->action->addModul($modul_item, $id);

        return response()->json(route('editModulCompilation', $product->slug_full_name));

    }

}
