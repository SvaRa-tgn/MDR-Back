<?php

namespace App\Http\Controllers\Page\ProfilePage\ProfileCart;

use App\Actions\Profile\ProfileCartActions\CheckoutOrderAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CheckoutOrderController extends Controller
{
    public function checkoutOrder(CheckoutOrderAction $action): View
    {
        return $action->execute();
    }

}
