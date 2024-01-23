<?php


namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\CookiesAction;

class CookiesController extends CookiesAction
{
    public function cookies(CookiesAction $action)
    {
        return $action->execute();
    }
}
