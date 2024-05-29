<?php

namespace App\Actions\Profile\ProfileCartActions;

use App\Repositories\Page\AdminPage\Product\ProductRepository;
use App\Repositories\Page\ProfilePage\Profile\ProfileRepository;
use App\Services\Profile\CartService;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class CheckoutOrderAction
{
    public function __construct(private ProfileRepository $profile, private CartService $service, private ProductRepository $product){}

    public function execute(): View
    {
        $user = $this->profile->profile();

        $products = collect();

        foreach (Cache::get('order:'. $user->id) as $key=>$name){
            $products->push($this->product->product($name));
        }

        $head = array_add($this->service->titlePage(), 'aside', 'Проверка заказа');

        return view ('/app-page/profile-page/profile-box/checkout-order', ['user'=>$user, 'head'=>$head, 'products' => $products]);
    }

}
