<?php


namespace App\Http\Controllers\Page\AdminPage\Category;

use App\DTO\DTOupdateUser;
use App\Http\Requests\Page\ProfilePage\Profile\UpdateRequest;
use App\Models\Category;
use App\Services\Page\AdminPage\Category\CategoryService;
use App\Services\Page\ProfilePage\Profile\ProfileService;
use Illuminate\Http\Request;

class EditController extends CategoryService
{
    public function edit($id, $name)
    {
        $category = $this->service->edit($id);

        return view ('/app-page/admin-page/admin-box/category/edit-category', compact('category'));
    }

}
