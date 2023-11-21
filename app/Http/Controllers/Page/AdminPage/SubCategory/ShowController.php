<?php


namespace App\Http\Controllers\Page\AdminPage\SubCategory;

use App\Services\Page\ProfilePage\Profile\ProfileService;

class ShowController extends ProfileService
{
    public function show()
    {


        return view ('/app-page/admin-page/admin-box/sub-category/sub-category');
    }

}
