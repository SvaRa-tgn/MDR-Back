<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\Color\UpdateColorRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOupdateColor extends DataTransferObject
{
    public string $color;
    public string $image;

    public static function fromUpdateColorRequest(UpdateColorRequest $request): self
    {

        $data = $request->validated();

        if (empty($data['color'])) {
            $color = 'null';
        } else {
            $color = $data['color'];
        }

        if (empty($data['image'])) {
            $image = 'null';
        } else {
            $image = $data['image'];
        }

        return new self([
            'color' => $color,
            'image' => $image
        ]);
    }

}
