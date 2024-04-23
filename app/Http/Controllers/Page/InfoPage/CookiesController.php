<?php

namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\CookiesAction;
use Illuminate\View\View;

class CookiesController extends CookiesAction
{
    public function cookies(CookiesAction $action): View
    {
        return $action->execute();
    }
}
