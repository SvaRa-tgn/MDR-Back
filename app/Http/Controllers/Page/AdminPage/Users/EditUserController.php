<?php

namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\EditUserAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class EditUserController extends Controller
{
    public function editUser(EditUserAction $action, $id): View
    {
        return $action->execute($id);
    }

}
