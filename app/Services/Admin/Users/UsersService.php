<?php

namespace App\Services\Admin\Users;

use App\Http\Controllers\Controller;

class UsersService extends Controller
{

    public function title()
    {
        $head = [
            'title' => 'Управление Пользователями - Админка MDR',
            'description' => 'Админка - Управление пользователями сайта My Decor Room'
        ];

        return $head;
    }

}
