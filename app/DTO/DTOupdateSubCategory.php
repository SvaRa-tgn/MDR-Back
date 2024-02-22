<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\SubCategory\UpdateSubCategoryRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOupdateSubCategory extends DataTransferObject
{
    public string $category;
    public string $sub_category;
    public string $image;

    public static function fromUpdateSubCategoryRequest(UpdateSubCategoryRequest $request): self
    {

        $data = $request->validated();

        if (empty($data['sub_category'])) {
            $sub_category = 'null';
        } else {
            $sub_category = $data['sub_category'];
        }

        if (empty($data['image'])) {
            $image = 'null';
        } else {
            $image = $data['image'];
        }

        return new self([
            'category' => $data['category'],
            'sub_category' => $sub_category,
            'image' => $image
        ]);
    }

}
