<?php

namespace App\Actions\Admin\Users;

use App\Services\Admin\Users\UsersService;
use Illuminate\View\View;

class UsersAction
{
    public function __construct(private UsersService $service){}

    public function execute(): View
    {
        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/users/users', ['head' => $head]);
    }
}
