<?php

namespace App\Actions\Admin\SubCategory;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\SubCategory\SubCategoryRepository;

class DestroySubCategoryAction extends Controller
{
    public $action;

    public function __construct(SubCategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id)
    {
        $this->action->destroy($id);

        return response()->json(route('subCategory'));
    }

}
