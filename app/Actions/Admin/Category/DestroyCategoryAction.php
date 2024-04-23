<?php

namespace App\Actions\Admin\Category;

use App\Repositories\Page\AdminPage\Category\CategoryRepository;
use App\Services\Admin\DestroyService;
use Illuminate\Http\JsonResponse;

class DestroyCategoryAction
{
    public function __construct(private CategoryRepository $repository, private DestroyService $service){}

    public function execute(int $id): JsonResponse
    {
        $this->service->destroyManyProducts(CategoryRepository::categoryFind($id)->Product);

        $this->service->destroyManySubCategories(CategoryRepository::categoryFind($id)->SubCategory);

        $this->repository->destroy(CategoryRepository::categoryFind($id));

        return response()->json(route('category'));
    }

}
