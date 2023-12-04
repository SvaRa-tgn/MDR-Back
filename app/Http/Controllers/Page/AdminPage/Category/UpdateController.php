<?php


namespace App\Http\Controllers\Page\AdminPage\Category;

use App\DTO\DTOcreateCategory;
use App\DTO\DTOupdateUser;
use App\Http\Requests\Page\AdminPage\Category\CreateRequest;
use App\Http\Requests\Page\ProfilePage\Profile\UpdateRequest;
use App\Services\Page\AdminPage\Category\CategoryService;
use App\Services\Page\ProfilePage\Profile\ProfileService;
use Spatie\DataTransferObject\DataTransferObject;

class UpdateController extends CategoryService
{
    public function Update(CreateRequest $request, $id)
    {

        $data = $request->validated();
        $category = $this->service->update($data, $id);

        return redirect()->route('editCategory.edit', ['id'=>$category->id, 'name'=>$category->name])->with('success', 'Изменения сохраннены.');
    }

}
