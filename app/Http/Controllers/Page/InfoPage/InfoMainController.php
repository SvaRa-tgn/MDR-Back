<?php


namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\InfoPageAction;
use Illuminate\View\View;

class InfoMainController extends InfoPageAction
{
    public function index(InfoPageAction $action): View
    {
        return $action->execute();
    }
}
