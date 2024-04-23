<?php

namespace App\Actions\Admin\Color;

use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class DestroyColorAction
{
    public function __construct(private ColorRepository $colorRepository, private ProductRepository $productRepository){}

    public function execute(int $id): JsonResponse
    {
        $this->productRepository->productNoColor($id, $this->colorRepository->noColor()->id);

        $this->colorRepository->destroyColor($id);

        return response()->json(route('color'));
    }

}
