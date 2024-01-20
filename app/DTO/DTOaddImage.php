<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\Product\AddImageRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOaddImage extends DataTransferObject
{
    public string $image;

    public static function fromAddImageRequest(AddImageRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'image' => $data['image']
        ]);
    }

}
