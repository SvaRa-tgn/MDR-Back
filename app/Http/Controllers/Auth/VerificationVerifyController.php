<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\VerificationVerifyAction;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerificationVerifyController
{
    public function verify(VerificationVerifyAction $action, EmailVerificationRequest $request): RedirectResponse
    {
        return $action->execute($request);
    }
}
