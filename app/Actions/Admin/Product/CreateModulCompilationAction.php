<?php

namespace App\Actions\Admin\Product;

use App\DTO\DTOcreateModulCompilation;
use App\Http\Requests\AdminPage\Product\CreateModulCompilationRequest;
use App\Repositories\Page\AdminPage\Image\ImageRepository;
use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Services\Admin\ModulService;
use Illuminate\Http\JsonResponse;

class CreateModulCompilationAction
{
    public function __construct(private ProductRepository $repository, private ModulService $service,
    private ImageRepository $image){}

    public function execute(CreateModulCompilationRequest $request): JsonResponse
    {
        $dto = DTOcreateModulCompilation::fromCreateModulCompilationRequest($request);

        $collection = ItemCollectionRepository::itemCollectionFind($dto->collection);

        $product = $this->repository->createCompilation($dto, $collection);

        $this->service->addManyModuls($dto, $product);

        $this->image->imageAddModul($dto, $product);

        return response()->json(route('createCompilation'));
    }

}
