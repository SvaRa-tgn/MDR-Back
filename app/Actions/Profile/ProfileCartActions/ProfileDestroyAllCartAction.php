<?php

namespace App\Actions\Profile\ProfileCartActions;

use App\Repositories\Page\ProfilePage\Cart\CartRepository;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Http\JsonResponse;

class ProfileDestroyAllCartAction
{
    public function __construct(private ProfileRepository $profile, private CartRepository $cart){}

    public function execute(): JsonResponse
    {
        $this->cart->destroyAllCart($this->profile->profile());

        return response()->json();
    }

}
