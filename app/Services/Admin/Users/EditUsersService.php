<?php

namespace App\Services\Admin\Users;

use App\Http\Controllers\Controller;

class EditUsersService extends Controller
{

    public function title()
    {
        $head = [
            'title' => 'Редактирование Пользователя - Админка MDR',
            'description' => 'Админка - Управление пользователями сайта My Decor Room'
        ];

        return $head;
    }

}
