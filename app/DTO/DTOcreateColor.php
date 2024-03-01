<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\Color\CreateColorRequest;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOcreateColor extends DataTransferObject
{
    public string $color;
    public string $slug_color;
    public string $image;

    public static function fromCreateColorRequest(CreateColorRequest $request): self
    {
        $data = $request->validated();
        $slug_color = Transliterate::slugify($data['color']);

        return new self([
            'color' => $data['color'],
            'slug_color' => $slug_color,
            'image' => $data['image']
        ]);
    }

}
