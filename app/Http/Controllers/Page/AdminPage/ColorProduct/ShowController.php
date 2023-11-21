<?php


namespace App\Http\Controllers\Page\AdminPage\ColorProduct;

use App\Services\Page\ProfilePage\Profile\ProfileService;

class ShowController extends ProfileService
{
    public function show()
    {


        return view ('/app-page/admin-page/admin-box/color-product/color-product');
    }

}
