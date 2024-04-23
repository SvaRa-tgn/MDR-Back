<?php

namespace App\Http\Controllers\Page\InfoPage;

use App\Actions\InfoPage\PublicOffertaAction;
use Illuminate\View\View;

class PublicOffertaController extends PublicOffertaAction
{
    public function offerta(PublicOffertaAction $action): View
    {
        return $action->execute();
    }
}
