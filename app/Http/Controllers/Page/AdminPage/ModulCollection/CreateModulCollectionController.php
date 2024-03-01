<?php

namespace App\Http\Controllers\Page\AdminPage\ModulCollection;

use App\Actions\Admin\ModulCollection\CreateModulCollectionAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPage\ModulCollection\ModulCollectionRequest;

class CreateModulCollectionController extends Controller
{
    public function createModulCollection(CreateModulCollectionAction $action, ModulCollectionRequest $request)
    {
        return $action->execute($request);
    }

}
