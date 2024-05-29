<?php

namespace App\Actions\Auth;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerificationVerifyAction
{
    public function execute(EmailVerificationRequest $request): RedirectResponse
    {
        $request->fulfill();

        return redirect()->route('private');
    }

}
