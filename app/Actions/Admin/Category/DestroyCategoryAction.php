<?php

namespace App\Actions\Admin\Category;

use App\Interfaces\DestroyInterface;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use Illuminate\Http\JsonResponse;

class DestroyCategoryAction
{
    public $action;

    public function __construct(CategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id): JsonResponse
    {
        $this->action->destroy($id);

        return response()->json(route('category'));
    }

}
