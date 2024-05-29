<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\RecoveryRequestAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RecoveryRequestController
{
    public function recovery(RecoveryRequestAction $action, Request $request): JsonResponse
    {
        return $action->execute($request);
    }
}
