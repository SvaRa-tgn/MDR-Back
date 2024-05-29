<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\NewPasswordAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NewPasswordController
{
    public function newPassword(NewPasswordAction $action, Request $request): JsonResponse
    {
        return $action->execute($request);
    }
}
