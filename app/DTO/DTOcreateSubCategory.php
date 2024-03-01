<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\SubCategory\SubCategoryCreateRequest;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOcreateSubCategory extends DataTransferObject
{
    public string $category;
    public string $sub_category;
    public string $slug_sub_category;
    public string $image;

    public static function fromCreateSubCategoryRequest(SubCategoryCreateRequest $request): self
    {
        $data = $request->validated();
        $slug_sub_category = Transliterate::slugify($data['sub_category']);

        return new self([
            'category' => $data['category'],
            'sub_category' => $data['sub_category'],
            'slug_sub_category' => $slug_sub_category,
            'image' => $data['image']
        ]);
    }

}
