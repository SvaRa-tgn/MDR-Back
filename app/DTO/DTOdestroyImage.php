<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\Product\DestroyImageRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOdestroyImage extends DataTransferObject
{
    public int $id;

    public static function fromDestroyImageRequest(DestroyImageRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'id' => $data['id']
        ]);
    }

}
