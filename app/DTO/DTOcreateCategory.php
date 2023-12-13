<?php


namespace App\DTO;


use App\Http\Requests\AdminPage\Category\CreateCategoryRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOcreateCategory extends DataTransferObject
{
    public string $category;
    public string $image;

    public static function fromCreateCategoryRequest(CreateCategoryRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'category' => $data['category'],
            'image' => $data['image']
        ]);
    }

}
