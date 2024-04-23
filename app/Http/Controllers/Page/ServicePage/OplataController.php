<?php

namespace App\Http\Controllers\Page\ServicePage;

use App\Actions\ServicePage\OplataAction;
use Illuminate\View\View;

class OplataController extends OplataAction
{
    public function oplata(OplataAction $action): View
    {
        return $action->execute();
    }
}
