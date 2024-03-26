<?php

namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\UsersAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class UsersController extends Controller
{
    public function users(UsersAction $action): View
    {
        return $action->execute();
    }

}
