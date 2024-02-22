<?php


namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\DestroyUserAction;

class DestroyUserController extends DestroyUserAction
{
    public function destroyUser(DestroyUserAction $action, $id)
    {
        return $action->execute($id);
    }

}
