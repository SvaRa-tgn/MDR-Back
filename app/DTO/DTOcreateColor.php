<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\Color\CreateColorRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOcreateColor extends DataTransferObject
{
    public string $color;
    public string $image;

    public static function fromCreateColorRequest(CreateColorRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'color' => $data['color'],
            'image' => $data['image']
        ]);
    }

}
