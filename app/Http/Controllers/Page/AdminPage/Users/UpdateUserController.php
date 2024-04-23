<?php
namespace App\Http\Controllers\Page\AdminPage\Users;

use App\Actions\Admin\Users\UpdateUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersUpdate\UpdateUserRequest;
use Illuminate\Http\JsonResponse;
use Transliterate;

class UpdateUserController extends Controller
{
    public function updateUser(UpdateUserRequest $request, UpdateUserAction $action, int $id): JsonResponse
    {
        return $action->execute($request, $id);
    }

}
