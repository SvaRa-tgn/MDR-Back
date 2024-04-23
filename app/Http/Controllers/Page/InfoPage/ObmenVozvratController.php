<?php

namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\ObmenVozvratAction;
use Illuminate\View\View;

class ObmenVozvratController extends ObmenVozvratAction
{
    public function obmenVozvrat(ObmenVozvratAction $action): View
    {
        return $action->execute();
    }
}
