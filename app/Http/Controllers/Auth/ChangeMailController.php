<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\ChangeMailAction;
use App\Http\Requests\Auth\ChangeMailRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChangeMailController
{
    public function change(ChangeMailAction $action, Request $request, ChangeMailRequest $mailRequest): JsonResponse
    {
        return $action->execute($request, $mailRequest);
    }
}
