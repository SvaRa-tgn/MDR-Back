<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\Color\CreateColorRequest;
use Illuminate\Support\Str;
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
        $lover = Str::lower($data['color']);
        $name = Str::title($lover);
        $slug_color = Transliterate::slugify($data['color']);

        return new self([
            'color' => $name,
            'slug_color' => $slug_color,
            'image' => $data['image']
        ]);
    }

}
