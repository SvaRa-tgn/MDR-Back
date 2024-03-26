<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\SubCategory\UpdateSubCategoryRequest;
use Illuminate\Support\Str;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOupdateSubCategory extends DataTransferObject
{
    public string $category;
    public string $sub_category;
    public string $slug_sub_category;
    public string $type_item;
    public string $image;

    public static function fromUpdateSubCategoryRequest(UpdateSubCategoryRequest $request): self
    {

        $data = $request->validated();

        if (empty($data['sub_category'])) {
            $sub_category = 'null';
            $slug_sub_category = 'null';
        } else {
            $lover = Str::lower($data['sub_category']);
            $name = Str::ucfirst($lover);
            $sub_category = $name;
            $slug_sub_category = Transliterate::slugify($data['sub_category']);
        }

        if (empty($data['image'])) {
            $image = 'null';
        } else {
            $image = $data['image'];
        }

        return new self([
            'category' => $data['category'],
            'sub_category' => $sub_category,
            'slug_sub_category' => $slug_sub_category,
            'type_item' => $data['type_item'],
            'image' => $image
        ]);
    }

}
