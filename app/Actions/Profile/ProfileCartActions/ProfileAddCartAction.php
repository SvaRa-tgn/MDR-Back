<?php

namespace App\Actions\Profile\ProfileCartActions;

use App\DTO\DTOaddCart;
use App\Http\Requests\ProfilePage\Profile\AddCartRequest;
use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\ProfilePage\Cart\CartRepository;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProfileAddCartAction
{
    public function __construct(private ProfileRepository $profile, private CartRepository $cart, private ProductRepository $product){}

    public function execute(AddCartRequest $request): JsonResponse
    {
        $this->cart->addCartItem($this->profile->profile(), $this->product->product(DTOaddCart::fromAddCartRequest($request)->slug_full_name));

        return response()->json();
    }

}
