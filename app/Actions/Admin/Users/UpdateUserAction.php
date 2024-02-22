<?php
namespace App\Actions\Admin\Users;

use App\DTO\DTOupdateUser;
use App\Http\Requests\UsersUpdate\UpdateUserRequest;
use App\Repositories\Page\Users\UsersRepository;
use Transliterate;

class UpdateUserAction
{
    public $action;

    public function __construct(UsersRepository $action)
    {
        $this->action = $action;
    }

    public function execute(UpdateUserRequest $request, $id)
    {
        $this->action->updateUser(DTOupdateUser::fromUpdateUserRequest($request), $id);

        return response()->json(route('editUser', $id));
    }
}
