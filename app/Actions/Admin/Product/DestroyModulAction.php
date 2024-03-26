<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOdestroyImage;
use App\Models\ModulCompilation;
use App\Repositories\Page\AdminPage\ModulCompilation\ModulCompilationRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class DestroyModulAction
{
    public $action;
    public $repository;

    public function __construct(ModulCompilationRepository $action, ProductRepository $repository)
    {
        $this->action = $action;
        $this->repository = $repository;
    }

    public function execute($id, $productId): JsonResponse
    {
        $this->action->destroyModul($id);

        $product = $this->repository->updateModul($productId);

        return response()->json(route('editModulCompilation', $product->slug_full_name));

    }

}
