<?php

namespace App\Actions\Auth;

use App\Repositories\Page\Users\UsersRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationSendAction
{
    public function __construct(private UsersRepository $user){}

    public function execute(Request $request): JsonResponse
    {
        $user = $this->user->userFind(Auth::id());

        if($user->email_verified_at === null) {
            $request->user()->sendEmailVerificationNotification();

            return response()->json(['text' => 'Письмо для подтверждения email отправлено на вашу почту.', 'href' => 'null']);
        } else {
            return response()->json(['text' => 'Вы уже подтвердили свой email', 'href' => route('private')]);
        }


    }

}
