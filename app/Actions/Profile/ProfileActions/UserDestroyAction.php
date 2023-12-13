<?php

namespace App\Actions\Profile\ProfileActions;

use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;

class UserDestroyAction
{
    public $action;

    public function __construct(ProfileRepository $action)
    {
        $this->action = $action;

    }

    public function execute($user)
    {
        $this->action->destroyUser($user);

        return redirect()->route('/.index')->with('success', 'Пользователь удален');
    }

}
