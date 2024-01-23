<?php


namespace App\Http\Controllers\Page\ServicePage;

use App\Actions\ServicePage\SamovyvozAction;

class SamovyvozController extends SamovyvozAction
{
    public function samovyvoz(SamovyvozAction $action)
    {
        return $action->execute();
    }
}
