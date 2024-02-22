<?php
namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\UpdatePasswordUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersUpdate\UpdateUserPasswordRequest;
use Transliterate;

class UpdatePasswordUserController extends Controller
{
    public function updateUserPassword(UpdatePasswordUserAction $action, UpdateUserPasswordRequest $request, $id)
    {
        return $action->execute($request, $id);
    }
}
