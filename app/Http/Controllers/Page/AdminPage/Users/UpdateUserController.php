<?php
namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\UpdateUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersUpdate\UpdateUserRequest;
use Transliterate;

class UpdateUserController extends Controller
{
    public function updateUser(UpdateUserRequest $request, UpdateUserAction $action, $id)
    {
        return $action->execute($request, $id);
    }

}
