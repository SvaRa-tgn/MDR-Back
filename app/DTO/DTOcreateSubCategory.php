<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\SubCategory\SubCategoryCreateRequest;
use Illuminate\Support\Str;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOcreateSubCategory extends DataTransferObject
{
    public string $category;
    public string $sub_category;
    public string $slug_sub_category;
    public string $type_item;
    public string $image;

    public static function fromCreateSubCategoryRequest(SubCategoryCreateRequest $request): self
    {
        $data = $request->validated();
        $lover = Str::lower($data['sub_category']);
        $name = Str::ucfirst($lover);
        $slug_sub_category = Transliterate::slugify($data['sub_category']);

        return new self([
            'category' => $data['category'],
            'sub_category' => $name,
            'slug_sub_category' => $slug_sub_category,
            'type_item' => $data['type_item'],
            'image' => $data['image']
        ]);
    }

}
