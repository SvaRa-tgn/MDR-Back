<?php


namespace App\Http\Controllers\Page\ServicePage;

use App\Actions\ServicePage\SborkaAction;

class SborkaController extends SborkaAction
{
    public function sborka(SborkaAction $action)
    {
        return $action->execute();
    }
}
