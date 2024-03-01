<?php

namespace App\Actions\Admin\SubCategory;

use App\DTO\DTOcreateSubCategory;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;
use Illuminate\Http\RedirectResponse;

class CreateSubCategoryAction
{
    public $action;

    public function __construct(SubCategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request): RedirectResponse
    {
        $this->action->createSubCategory(DTOcreateSubCategory::fromCreateSubCategoryRequest($request));

        return redirect()->route('subCategory');
    }

}
