<?php

namespace App\Actions\Profile\ProfileCartActions;

use App\Repositories\Page\ProfilePage\Cart\CartRepository;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use Illuminate\Http\JsonResponse;

class ProfileDestroyCartAction
{
    public function __construct(private ProfileRepository $profile, private CartRepository $cart){}

    public function execute(int $id): JsonResponse
    {
        $this->cart->destroyCart($id, $this->profile->profile());

        return response()->json();
    }

}
