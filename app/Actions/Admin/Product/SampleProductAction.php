<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOsampleProduct;
use App\Http\Requests\AdminPage\Product\SampleProductRequest;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use Illuminate\Http\JsonResponse;

class SampleProductAction
{
    public function __construct(private ProductRepository $repository){}

    public function execute(SampleProductRequest $request): JsonResponse
    {
        return response()->json($this->repository->sampleProducts(SubCategoryRepository::subCategoryFind(DTOsampleProduct::fromSampleProductRequest($request)->sub_category)));
    }

}
