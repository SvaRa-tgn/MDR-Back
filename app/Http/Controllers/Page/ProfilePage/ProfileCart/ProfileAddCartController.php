<?php

namespace App\Http\Controllers\Page\ProfilePage\ProfileCart;

use App\Actions\Profile\ProfileCartActions\ProfileAddCartAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilePage\Profile\AddCartRequest;
use Illuminate\View\View;

class ProfileAddCartController extends Controller
{
    public function addCart(ProfileAddCartAction $action, AddCartRequest $request): View
    {
        return $action->execute($request);
    }

}
