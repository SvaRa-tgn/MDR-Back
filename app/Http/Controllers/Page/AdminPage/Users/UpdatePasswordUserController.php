<?php
namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\UpdatePasswordUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersUpdate\UpdateUserPasswordRequest;
use Illuminate\Http\JsonResponse;
use Transliterate;

class UpdatePasswordUserController extends Controller
{
    public function updateUserPassword(UpdatePasswordUserAction $action, UpdateUserPasswordRequest $request, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }
}
