<?php

namespace App\Actions\Admin\SubCategory;

use App\DTO\DTOupdateSubCategory;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;

class UpdateSubCategoryAction extends Controller
{
    public $action;

    public function __construct(SubCategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id)
    {
        $subCategory = $this->action->updateSubCategory(DTOupdateSubCategory::fromUpdateSubCategoryRequest($request), $id);

        return response()->json(route('editSubCategory', $subCategory->slug_sub_category));
    }

}
