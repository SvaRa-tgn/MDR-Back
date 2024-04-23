<?php

namespace App\DTO;

use App\Http\Requests\ProfilePage\Profile\AddCartRequest;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOaddCart extends DataTransferObject
{
    public string $slug_full_name;

    public static function fromAddCartRequest(AddCartRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'slug_full_name' => $data['slug_full_name']
        ]);
    }

}
