<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use Illuminate\Http\JsonResponse;

class SampleCollectionAction
{
    public function __construct(private ItemCollectionRepository $repository){}

    public function execute(string $type): JsonResponse
    {
        return response()->json($this->repository->sampleCollections($type));
    }

}
