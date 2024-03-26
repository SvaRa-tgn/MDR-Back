<?php

namespace App\Actions\Admin\Users;

use App\Repositories\Page\Users\UsersRepository;
use App\Services\Admin\Users\EditUsersService;
use Illuminate\View\View;

class EditUserAction
{
    public $action;

    private $service;

    public function __construct(UsersRepository $action, EditUsersService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute($id): View
    {
        $user = $this->action->editUser($id);

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/users/edit-user', ['user' => $user, 'head' => $head]);
    }

}
