<?php


namespace App\Http\Controllers\Page\ServicePage;

use App\Actions\ServicePage\DeliveryAction;
use Illuminate\View\View;

class DeliveryController extends DeliveryAction
{
    public function delivery(DeliveryAction $action): View
    {
        return $action->execute();
    }
}
