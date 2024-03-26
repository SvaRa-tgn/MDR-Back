<?php

namespace App\Actions\Admin\Product;

use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use Illuminate\Http\JsonResponse;

class SampleCollectionAction
{
    public $action;

    public function __construct(ItemCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($type): JsonResponse
    {
        $collections = $this->action->sampleCollections($type);

        return response()->json($collections);
    }

}
