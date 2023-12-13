<?php

namespace App\Actions\Admin\Category;

use App\DTO\DTOcreateCategory;
use App\DTO\DTOupdateCategory;
use App\DTO\DTOupdateUser;
use App\Http\Controllers\Controller;
use App\Http\Resources\Page\AdminPage\Category\CategoryResource;
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

        return redirect()->route('editCategory.edit', ['id'=>$category->id, 'name'=>$category->name]);
    }



}
