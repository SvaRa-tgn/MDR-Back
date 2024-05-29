<?php

namespace App\Actions\Auth;

use App\Repositories\Page\Users\UsersRepository;
use App\Services\Profile\VerificationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class VerificationNoticeAction
{
    public function __construct(private UsersRepository $user, private VerificationService $service){}

    public function execute(): View| RedirectResponse
    {
        $user = $this->service->mail($this->user->userFind(Auth::id()));

        if($user->email_verified_at === null) {
            return view('auth.verify-email', ['user' => $user]);
        } else {
            return redirect()->route('private');
        }


    }

}
