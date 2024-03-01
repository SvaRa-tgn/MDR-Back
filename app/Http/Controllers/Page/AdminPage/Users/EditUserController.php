<?php

namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\EditUserAction;
use App\Http\Controllers\Controller;

class EditUserController extends Controller
{
    public function editUser(EditUserAction $action, $id)
    {
        return $action->execute($id);
    }

}
