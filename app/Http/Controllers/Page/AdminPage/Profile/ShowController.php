<?php


namespace App\Http\Controllers\Page\AdminPage\Profile;

use App\Services\Page\ProfilePage\Profile\ProfileService;

class ShowController extends ProfileService
{
    public function show()
    {
        $user = $this->service->show();

        return view ('/app-page/admin-page/admin-box/profile/profile-admin', compact('user'));
    }

}
