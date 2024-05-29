<?php

namespace App\Repositories\Page\ProfilePage\Cart;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Repositories\Page\ProfilePage\Cart\Interfaces\CartRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CartRepository implements CartRepositoryInterface
{
    public function cartItems(User $user): Collection
    {
        $carts = Cart::leftjoin('products', 'products.id', '=', 'carts.product_id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->join('images', 'products.id', '=', 'images.product_id')
            ->select('products.*', 'images.link', 'categories.slug_category', 'sub_categories.slug_sub_category')
            ->where('user_id', $user->id)->where('images.status', 'top')->get();

        return $carts;
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

    public function destroyAllCart($user): void
    {
        $cartItems = Cart::where('user_id', $user->id)->get();

        foreach($cartItems as $cartItem){
            $cartItem->delete();
        }
    }

}
