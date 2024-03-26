<?php


namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\DestroyUserAction;
use Illuminate\Http\JsonResponse;

class DestroyUserController extends DestroyUserAction
{
    public function destroyUser(DestroyUserAction $action, $id): JsonResponse
    {
        return $action->execute($id);
    }

}
