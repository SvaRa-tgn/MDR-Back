<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\Services\Page\ProfilePage\Profile\ProfileService;

class ShowController extends ProfileService
{
    public function show()
    {
        $user = $this->service->show();

        return view ('/app-page/profile-page/profile-box/profile-main', compact('user'));
    }

}
