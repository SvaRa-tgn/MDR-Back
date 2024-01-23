<?php


namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\ObmenVozvratAction;

class ObmenVozvratController extends ObmenVozvratAction
{
    public function obmenVozvrat(ObmenVozvratAction $action)
    {
        return $action->execute();
    }
}
