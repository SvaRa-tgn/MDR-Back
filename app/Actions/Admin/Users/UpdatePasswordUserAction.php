<?php
namespace App\Actions\Admin\Users;

use App\DTO\DTOupdateUserPassword;
use App\Http\Requests\UsersUpdate\UpdateUserPasswordRequest;
use App\Repositories\Page\Users\UsersRepository;
use Illuminate\Http\JsonResponse;
use Transliterate;

class UpdatePasswordUserAction
{
    public $action;

    public function __construct(UsersRepository $action)
    {
        $this->action = $action;
    }

    public function execute(UpdateUserPasswordRequest $request, $id): JsonResponse
    {
        $this->action->updateUserPassword(DTOupdateUserPassword::fromUpdateUserPasswordRequest($request), $id);

        return response()->json(route('editUser', $id));
    }
}
