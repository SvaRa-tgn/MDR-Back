<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\VerificationSendAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VerificationSendController
{
    public function send(VerificationSendAction $action, Request $request): JsonResponse
    {
        return $action->execute($request);
    }
}
