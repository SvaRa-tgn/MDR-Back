<?php

namespace App\Repositories\Page\ProfilePage\Cart\Interfaces;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;

interface CartRepositoryInterface
{
    public function cartItems(User $user);

    public function addCartItem(User $user, Product $product): Cart;

    public function destroyCart(int $id, $user): void;
}
