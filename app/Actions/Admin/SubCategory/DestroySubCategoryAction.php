<?php

namespace App\Actions\Admin\SubCategory;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use Illuminate\Http\JsonResponse;

class DestroySubCategoryAction extends Controller
{
    public $action;

    public function __construct(SubCategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id): JsonResponse
    {
        $this->action->destroy($id);

        return response()->json(route('subCategory'));
    }

}
