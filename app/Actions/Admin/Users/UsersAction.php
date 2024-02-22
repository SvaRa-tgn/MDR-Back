<?php

namespace App\Actions\Admin\Users;

use App\Http\Controllers\Controller;
use App\Services\Admin\Users\UsersService;

class UsersAction extends Controller
{
    public $service;

    public function __construct(UsersService $service)
    {
        $this->service = $service;
    }
    public function execute()
    {
        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/users/users',
            [
                'head' => $head
            ]);
    }
}
