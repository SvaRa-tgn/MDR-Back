<?php

namespace App\Actions\Admin\SubCategory;

use App\DTO\DTOupdateSubCategory;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use Illuminate\Http\JsonResponse;

class UpdateSubCategoryAction
{
    public $action;

    public function __construct(SubCategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): JsonResponse
    {
        $subCategory = $this->action->updateSubCategory(DTOupdateSubCategory::fromUpdateSubCategoryRequest($request), $id);

        return response()->json(route('editSubCategory', $subCategory->slug_sub_category));
    }

}
