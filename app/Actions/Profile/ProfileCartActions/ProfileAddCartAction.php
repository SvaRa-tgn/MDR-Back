<?php

namespace App\Actions\Profile\ProfileCartActions;

use App\DTO\DTOaddCart;
use App\Http\Requests\ProfilePage\Profile\AddCartRequest;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\ProfilePage\Cart\CartRepository;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\View\View;

class ProfileAddCartAction
{
    public function __construct(private ProfileRepository $profile, private CartRepository $cart, private ProductRepository $product){}

    public function execute(AddCartRequest $request): View
    {
        $this->cart->addCartItem($this->profile->profile(), $this->product->product(DTOaddCart::fromAddCartRequest($request)->slug_full_name));

        return view ('/app-page/profile-page/profile-box/profile-cart');
    }

}
