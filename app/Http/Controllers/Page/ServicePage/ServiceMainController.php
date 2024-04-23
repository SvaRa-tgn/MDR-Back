<?php

namespace App\Http\Controllers\Page\ServicePage;

use App\Actions\ServicePage\ServicePageAction;
use Illuminate\View\View;

class ServiceMainController extends ServicePageAction
{
    public function servicePage(ServicePageAction $action): View
    {
        return $action->execute();
    }
}
