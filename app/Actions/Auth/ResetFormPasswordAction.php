<?php

namespace App\Actions\Auth;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ResetFormPasswordAction
{
    public function execute(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

}
