<?php

namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\UsersAction;

class UsersController extends UsersAction
{
    public function users(UsersAction $action)
    {
        return $action->execute();
    }

}
