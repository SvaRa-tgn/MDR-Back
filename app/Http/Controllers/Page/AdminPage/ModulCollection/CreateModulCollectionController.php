<?php


namespace App\Http\Controllers\Page\AdminPage\ModulCollection;

use App\Actions\Admin\ModulCollection\CreateModulCollectionAction;
use App\Http\Requests\AdminPage\Category\CreateCategoryRequest;
use App\Http\Requests\AdminPage\ModulCollection\ModulCollectionRequest;

class CreateModulCollectionController extends CreateModulCollectionAction
{
    public function createModulCollection(CreateModulCollectionAction $action, ModulCollectionRequest $request)
    {
        return $action->execute($request);
    }

}
