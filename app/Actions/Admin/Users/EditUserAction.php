<?php

namespace App\Actions\Admin\Users;

use App\Repositories\Page\Users\UsersRepository;
use App\Services\Admin\Users\EditUsersService;
use Illuminate\View\View;

class EditUserAction
{
    public function __construct(private UsersRepository $repository, private EditUsersService $service){}

    public function execute(int $id): View
    {
        $user = $this->repository->userFind($id);

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/users/edit-user', ['user' => $user, 'head' => $head]);
    }

}
