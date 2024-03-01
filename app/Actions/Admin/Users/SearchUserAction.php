<?php

namespace App\Actions\Admin\Users;

use App\DTO\DTOsearchUser;
use App\Repositories\Page\Users\UsersRepository;
use Illuminate\Http\JsonResponse;

class SearchUserAction
{
    public $action;

    public function __construct(UsersRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request): JsonResponse
    {
        $users = $this->action->searchUsers(DTOsearchUser::fromSearchUserRequest($request));

        return response()->json($users);
    }

}
