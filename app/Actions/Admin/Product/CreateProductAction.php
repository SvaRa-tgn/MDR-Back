<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOcreateProduct;
use App\Http\Requests\AdminPage\Product\CreateProductRequest;
use App\Repositories\Page\AdminPage\Image\ImageRepository;
use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use Illuminate\Http\JsonResponse;

class CreateProductAction
{
    public function __construct(private ProductRepository $repository, private ImageRepository $image){}

    public function execute(CreateProductRequest $request): JsonResponse
    {
        $dto = DTOcreateProduct::fromCreateProductRequest($request);

        $collection = ItemCollectionRepository::itemCollectionFind($dto->collection);

        $product = $this->repository->createProduct($dto, $collection);

        $this->image->imageAddProduct($dto, $product);

        return response()->json(route('productCreate'));
    }

}
