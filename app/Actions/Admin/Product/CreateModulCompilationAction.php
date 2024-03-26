<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOcreateModulCompilation;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class CreateModulCompilationAction
{
    public $action;

    public function __construct(ProductRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request): JsonResponse
    {
        $this->action->createCompilation(DTOcreateModulCompilation::fromCreateModulCompilationRequest($request));

        return response()->json(route('createCompilation'));
    }

}
