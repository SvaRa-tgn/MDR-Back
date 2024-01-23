<?php


namespace App\Http\Controllers\Page\ServicePage;

use App\Actions\ServicePage\ServicePageAction;

class ServiceMainController extends ServicePageAction
{
    public function servicePage(ServicePageAction $action)
    {
        return $action->execute();
    }
}
