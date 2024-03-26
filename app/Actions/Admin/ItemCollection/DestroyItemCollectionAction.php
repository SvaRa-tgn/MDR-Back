<?php

namespace App\Actions\Admin\ItemCollection;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\ItemCollection\ItemCollectionRepository;
use Illuminate\Http\JsonResponse;

class DestroyItemCollectionAction extends Controller
{
    public $action;

    public function __construct(ItemCollectionRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id): JsonResponse
    {
        $this->action->destroyItemCollection($id);

        return response()->json(route('itemCollection'));
    }

}
