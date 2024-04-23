<?php


namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\InfoUserAction;
use Illuminate\View\View;

class InfoUserController extends InfoUserAction
{
    public function infoUser(InfoUserAction $action): View
    {
        return $action->execute();
    }
}
