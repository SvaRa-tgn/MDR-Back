<?php


namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\PublicOffertaAction;

class PublicOffertaController extends PublicOffertaAction
{
    public function offerta(PublicOffertaAction $action)
    {
        return $action->execute();
    }
}
