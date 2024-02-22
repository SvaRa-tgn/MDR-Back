<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\Product\DestroyImageRequest;
use App\Http\Requests\AdminPage\Product\UpdateImageRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOupdateImage extends DataTransferObject
{
    public int $id;
    public string $image;

    public static function fromUpdateImageRequest(UpdateImageRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'id' => $data['id'],
            'image' => $data['image']
        ]);
    }

}
