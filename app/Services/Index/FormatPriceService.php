<?php

namespace App\Services\Index;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Number;

class FormatPriceService
{
    public static function formatPriceSingle($product): Product| null
    {
        if($product !== null){
            $price = Number::format($product->price, locale: 'ru');
            $product->price = $price;
        }

        return $product;
    }

    public static function formatPrice($products): Collection
    {
        if($products !== null){
            foreach ($products as $product){
                $product->cPrice = $product->price;
                $price = Number::format($product->price, locale: 'ru');
                $product->price = $price;
            }
        }

        return $products;
    }
}
