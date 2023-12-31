<?php

namespace App\Actions\Admin\Category;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;

class UpdateCategoryAction extends Controller
{
    public $action;

    public function __construct(CategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id)
    {
        $category = $this->action->updateCategory($request, $id );

        return response()->json(route('editCategory.edit', $category->slug_category));
    }

}
