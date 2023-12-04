<?php


namespace App\Http\Controllers\Page\AdminPage\Category;

use App\DTO\DTOcreateCategory;
use App\Http\Requests\Page\AdminPage\Category\CreateRequest;
use App\Http\Resources\Page\AdminPage\Category\CategoryResource;
use App\Services\Page\AdminPage\Category\CategoryService;


class CreateController extends CategoryService
{
    public function create(CreateRequest $request)
    {

        $data = New DTOcreateCategory($request->validated());
        $this->service->create($data);
        $categories = CategoryResource::collection($this->service->show());

        //return redirect()->route('category.show')->with('success', 'Категория создана');
        return response($categories);
    }

}
