<?php

namespace App\Http\Controllers\Page\ProfilePage\ProfileCart;

use App\Actions\Profile\ProfileCartActions\ProfileCartAction;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ProfileCartController extends Controller
{
    public function profileCartItems(ProfileCartAction $action): View
    {
        return $action->execute();
    }

}
