<?php

namespace App\Actions\Profile\ProfileActions;

use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;

class UserAction
{
    public $action;

    public function __construct(ProfileRepository $action)
    {
        $this->action = $action;
    }

    public function execute()
    {
        $user = $this->action->showUser();

        $head = [
            'title' => 'Личный кабинет - My Decor Room',
            'description' => 'Личные данные клиента интернет-магазина My Decor Room'
        ];

        return ['user'=>$user , 'head'=>$head];
    }

}
