<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\ResetFormPasswordAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ResetFormPasswordController
{
    public function resetForm(ResetFormPasswordAction $action, Request $request): View
    {
        return $action->execute($request);
    }
}
