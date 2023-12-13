<?php

namespace App\Actions\Admin\Category;

use App\DTO\DTOcreateCategory;
use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Category\CategoryRepository;

class CreateCategoryAction extends Controller
{
    public $action;

    public function __construct(CategoryRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request)
    {
        $this->action->createCategory(DTOcreateCategory::fromCreateCategoryRequest($request));

        return redirect()->route('category.show')->with('success', 'Категория создана');
    }

}
