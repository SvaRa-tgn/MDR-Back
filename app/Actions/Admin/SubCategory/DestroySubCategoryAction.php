<?php

namespace App\Actions\Admin\SubCategory;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use App\Services\Admin\DestroyService;
use Illuminate\Http\JsonResponse;

class DestroySubCategoryAction extends Controller
{
    public function __construct(private SubCategoryRepository $repository, private DestroyService $service){}

    public function execute(int $id): JsonResponse
    {
        $this->service->destroyManyProducts(SubCategoryRepository::subCategoryFind($id)->Product);

        $this->repository->destroy(SubCategoryRepository::subCategoryFind($id));

        return response()->json(route('subCategory'));
    }

}
