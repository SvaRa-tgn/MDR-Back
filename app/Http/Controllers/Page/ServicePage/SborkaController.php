<?php

namespace App\Http\Controllers\Page\ServicePage;

use App\Actions\ServicePage\SborkaAction;
use Illuminate\View\View;

class SborkaController extends SborkaAction
{
    public function sborka(SborkaAction $action): View
    {
        return $action->execute();
    }
}
