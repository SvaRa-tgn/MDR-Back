<?php

namespace App\Services\Profile;

use App\Models\User;
use Illuminate\Support\Str;

class VerificationService
{
    public function mail(User $user): User
    {
        if('https://'.Str::after($user->email, '@') === 'https://yandex.ru'){
            $user->mail = 'https://ya.ru';
        } else {
            $user->mail = 'https://'.Str::after($user->email, '@');
        }

        return $user;
    }
}
