<?php

namespace App\Actions\Profile\ProfileCartActions;

use App\Repositories\Page\ProfilePage\Cart\CartRepository;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use App\Services\Index\FormatPriceService;
use App\Services\Profile\CartService;
use Illuminate\View\View;

class ProfileCartAction
{
    public function __construct(private ProfileRepository $profile, private CartRepository $cart, private CartService $service){}

    public function execute(): View
    {
        $user = $this->profile->profile();

        $products = $this->cart->cartItems($user);

        $carts = FormatPriceService::formatPrice($products);

        $head = $this->service->editTitle($user->familia.' '.$user->name.' '.$user->father_name);

        return view ('/app-page/profile-page/profile-box/profile-cart', ['user'=>$user, 'head'=>$head, 'carts'=>$carts]);
    }

}
