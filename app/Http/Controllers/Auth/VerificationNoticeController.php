<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\VerificationNoticeAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class VerificationNoticeController
{
    public function notice(VerificationNoticeAction $action): View| RedirectResponse
    {
        return $action->execute();
    }
}
