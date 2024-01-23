<?php


namespace App\Http\Controllers\Page\ServicePage;

use App\Actions\ServicePage\DeliveryAction;

class DeliveryController extends DeliveryAction
{
    public function delivery(DeliveryAction $action)
    {
        return $action->execute();
    }
}
