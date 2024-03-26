<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\Color\UpdateColorRequest;
use Illuminate\Support\Str;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOupdateColor extends DataTransferObject
{
    public string $color;
    public string $slug_color;
    public string $image;

    public static function fromUpdateColorRequest(UpdateColorRequest $request): self
    {

        $data = $request->validated();

        if (empty($data['color'])) {
            $color = 'null';
            $slug_color = 'null';
        } else {
            $lover = Str::lower($data['color']);
            $name = Str::title($lover);
            $color = $name;
            $slug_color = Transliterate::slugify($data['color']);
        }

        if (empty($data['image'])) {
            $image = 'null';
        } else {
            $image = $data['image'];
        }

        return new self([
            'color' => $color,
            'slug_color' => $slug_color,
            'image' => $image
        ]);
    }

}
