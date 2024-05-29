<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\Product\CreateOrderRequest;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOcreateOrder extends DataTransferObject
{
    public array $products;

    public static function fromCreateOrderRequest(CreateOrderRequest $request): self
    {
        $data = $request->validated();

        $products = json_decode($data['products']);

        return new self([
            'products' => $products
        ]);
    }

}
