<?php


namespace App\Http\Controllers\Page\ProfilePage\Profile;

use App\Actions\Profile\ProfileActions\UserAction;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show(UserAction $action)
    {
        return view ('/app-page/profile-page/profile-box/profile-main', $action->execute());
    }

}
