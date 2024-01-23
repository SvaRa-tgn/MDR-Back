<?php


namespace App\Http\Controllers\Page\ServicePage;

use App\Actions\ServicePage\OplataAction;

class OplataController extends OplataAction
{
    public function oplata(OplataAction $action)
    {
        return $action->execute();
    }
}
