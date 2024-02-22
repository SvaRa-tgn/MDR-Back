<?php

namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\UpdateUserRoleAction;
use App\Http\Requests\AdminPage\Users\UpdateUserRoleRequest;

class UpdateUserRoleController extends UpdateUserRoleAction
{
    public function updateUserRole(UpdateUserRoleAction $action, UpdateUserRoleRequest $request, $id)
    {
        return $action->execute($request, $id);
    }

}
