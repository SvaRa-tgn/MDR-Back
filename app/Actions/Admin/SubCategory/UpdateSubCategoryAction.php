<?php

namespace App\Actions\Admin\SubCategory;

use App\DTO\DTOupdateSubCategory;
use App\Http\Requests\AdminPage\SubCategory\UpdateSubCategoryRequest;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use Illuminate\Http\JsonResponse;

class UpdateSubCategoryAction
{
    public function __construct(private SubCategoryRepository $repository){}

    public function execute(UpdateSubCategoryRequest $request, int $id): JsonResponse
    {
        $subCategory = $this->repository->updateSubCategory(DTOupdateSubCategory::fromUpdateSubCategoryRequest($request), $id);

        return response()->json(route('editSubCategory', $subCategory->slug_sub_category));
    }

}
