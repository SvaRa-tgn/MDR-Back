<?php

namespace App\Actions\Admin\ItemCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Services\Admin\DestroyService;
use Illuminate\Http\JsonResponse;

class DestroyItemCollectionAction extends Controller
{
    public function __construct(private ItemCollectionRepository $repository, private DestroyService $service,
                                private ProductRepository $productRepository){}

    public function execute(int $id): JsonResponse
    {
        $this->service->destroyManyProducts($this->productRepository->productFindItemCollection($id));

        $this->repository->destroyItemCollection(ItemCollectionRepository::itemCollectionFind($id));

        return response()->json(route('itemCollection'));
    }

}
