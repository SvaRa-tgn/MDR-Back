<?php

namespace App\Actions\Profile\ProfileActions;

use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Http\RedirectResponse;

class ProfileCheckAction
{
    public function __construct(private ProfileRepository $profile){}

    public function execute(): RedirectResponse
    {
        $user = $this->profile->profile();

        return redirect()->route('profile', ['familia'=> $user->slug_familia, 'name'=> $user->slug_name, 'father'=> $user->slug_father_name]);
    }

}

