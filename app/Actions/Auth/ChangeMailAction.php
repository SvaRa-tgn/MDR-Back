<?php

namespace App\Actions\Auth;

use App\DTO\DTOchangeMail;
use App\Http\Requests\Auth\ChangeMailRequest;
use App\Repositories\Page\Users\UsersRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChangeMailAction
{
    public function __construct(private UsersRepository $user){}

    public function execute(Request $request, ChangeMailRequest $mailRequest): JsonResponse
    {
        $user = $this->user->userFind(Auth::id());

        if($user->email_verified_at === null) {
            $user = $this->user->changeMail($user, DTOchangeMail::fromChangeMailRequest($mailRequest));

            $request->user()->email = $user->email;

            $request->user()->sendEmailVerificationNotification();

            return response()->json(['text' => 'Email изменен, письмо для подтверждения отправленно на новый email.', 'href' => 'null']);
        } else {
            return response()->json(['text' => 'Вы уже подтвердили свой email', 'href' => route('private')]);
        }

    }

}
