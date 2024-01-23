<?php


namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\InfoUserAction;

class InfoUserController extends InfoUserAction
{
    public function infoUser(InfoUserAction $action)
    {
        return $action->execute();
    }
}
