<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\Category\UpdateCategoryRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOupdateCategory extends DataTransferObject
{
    public string $category;
    public string $image;

    public static function fromUpdateCategoryRequest(UpdateCategoryRequest $request): self
    {

    $data = $request->validated();

        return new self([
            'category' => $data['category'],
            'image' => $data['image']
        ]);
    }

}
