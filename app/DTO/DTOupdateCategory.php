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

        if (empty($data['category'])) {
            $category = 'null';
        } else {
            $category = $data['category'];
        }

        if (empty($data['image'])) {
            $image = 'null';
        } else {
            $image = $data['image'];
        }

        return new self([
            'category' => $category,
            'image' => $image
        ]);
    }

}
