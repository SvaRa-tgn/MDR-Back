<?php

namespace App\Actions\Admin\Users;

use App\DTO\DTOsearchUser;
use App\Http\Controllers\Controller;
use App\Repositories\Page\Users\UsersRepository;

class SearchUserAction extends Controller
{
    public $action;

    public function __construct(UsersRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request)
    {
        $users = $this->action->searchUsers(DTOsearchUser::fromSearchUserRequest($request));

        return response()->json($users);
    }

}
