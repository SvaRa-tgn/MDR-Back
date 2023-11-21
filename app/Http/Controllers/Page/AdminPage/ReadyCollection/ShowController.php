<?php


namespace App\Http\Controllers\Page\AdminPage\ReadyCollection;

use App\Services\Page\ProfilePage\Profile\ProfileService;

class ShowController extends ProfileService
{
    public function show()
    {


        return view ('/app-page/admin-page/admin-box/ready-collection/create-ready-collection');
    }

}
