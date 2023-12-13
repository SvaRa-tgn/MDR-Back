<?php


namespace App\Http\Controllers\Page\AdminPage\Profile;

use App\Actions\Profile\ProfileActions\UserAction;

class ShowController extends UserAction
{
    public function show(UserAction $action)
    {
        return view ('/app-page/admin-page/admin-box/profile/profile-admin', $action->execute());
    }

}
