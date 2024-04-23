<?php


namespace App\Http\Controllers\Page\ServicePage;

use App\Actions\ServicePage\SamovyvozAction;
use Illuminate\View\View;

class SamovyvozController extends SamovyvozAction
{
    public function samovyvoz(SamovyvozAction $action): View
    {
        return $action->execute();
    }
}
