<?php

namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\EditUserAction;

class EditUserController extends EditUserAction
{
    public function editUser(EditUserAction $action, $id)
    {
        return $action->execute($id);
    }

}
