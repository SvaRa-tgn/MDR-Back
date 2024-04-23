<?php

namespace App\Actions\Profile\ProfileCartActions;

use App\Repositories\Page\ProfilePage\Cart\CartRepository;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\View\View;

class ProfileDestroyCartAction
{
    public function __construct(private ProfileRepository $profile, private CartRepository $cart){}

    public function execute(int $id): View
    {
        $this->cart->destroyCart($id, $this->profile->profile());

        return view ('/app-page/profile-page/profile-box/profile-cart');
    }

}
