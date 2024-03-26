<?php

namespace App\Http\Controllers\Page\ProfilePage\ProfilePurchased;

use App\Actions\Profile\ProfilePurchasedActions\ProfilePurchasedAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ProfilePurchasedController extends Controller
{
    public function profilePurchasedItems(ProfilePurchasedAction $action): View
    {
        return $action->execute();
    }

}
