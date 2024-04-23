<?php

namespace App\Repositories\Page\ProfilePage\Cart;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Repositories\Page\ProfilePage\Cart\Interfaces\CartRepositoryInterface;

class CartRepository implements CartRepositoryInterface
{
    public function cartItems(User $user)
    {
        return $user->cartItem;
    }

    public function addCartItem(User $user, Product $product): Cart
    {
        $cartItem = new Cart();
        $cartItem->user_id = $user->id;
        $cartItem->product_id = $product->id;
        $cartItem->save();

        return $cartItem;
    }

    public function destroyCart(int $id, $user): void
    {
        $cartItem = Cart::where('product_id', $id)->where('user_id', $user->id)->first();

        $cartItem->delete();
    }

}
