<?php

namespace App\Actions\Profile\ProfileActions;

use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Http\RedirectResponse;

class ProfileCheckAction
{
    public $action;

    public function __construct(ProfileRepository $action)
    {
        $this->action = $action;
    }

    public function execute(): RedirectResponse
    {
        $user = $this->action->profile();

        return redirect()->route('profile', ['familia'=> $user->slug_familia, 'name'=> $user->slug_name, 'father'=> $user->slug_father_name]);
    }

}

