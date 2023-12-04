<?php


namespace App\Http\Controllers\Page\AdminPage\Category;

use App\Http\Resources\Page\AdminPage\Category\CategoryResource;
use App\Services\Page\AdminPage\Category\CategoryService;

class ShowController extends CategoryService
{
    public function show()
    {
        $categories = $this->service->show();

        return view ('/app-page/admin-page/admin-box/category/category', compact('categories'));
    }

}
