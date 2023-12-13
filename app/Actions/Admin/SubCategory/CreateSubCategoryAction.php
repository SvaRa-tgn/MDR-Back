<?php


namespace App\Actions\Admin\SubCategory;

use App\DTO\DTOcreateSubCategory;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;

class CreateSubCategoryAction extends Controller
{
    public $action;

    public function __construct(SubCategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request)
    {
        $this->action->createSubCategory(DTOcreateSubCategory::fromCreateSubCategoryRequest($request));

        return redirect()->route('category.show');;
    }
}
