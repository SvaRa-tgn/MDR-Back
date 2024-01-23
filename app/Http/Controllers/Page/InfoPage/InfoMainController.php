<?php


namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\InfoPageAction;

class InfoMainController extends InfoPageAction
{
    public function index(InfoPageAction $action)
    {
        return $action->execute();
    }
}
