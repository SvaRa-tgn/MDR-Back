<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\Category\UpdateCategoryRequest;
use Illuminate\Support\Str;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOupdateCategory extends DataTransferObject
{
    public string $category;
    public string $slug_category;
    public string $image;

    public static function fromUpdateCategoryRequest(UpdateCategoryRequest $request): self
    {

        $data = $request->validated();

        if (empty($data['category'])) {
            $category = 'null';
            $slug_category = 'null';
        } else {
            $lover = Str::lower($data['category']);
            $name = Str::ucfirst($lover);
            $category = $name;
            $slug_category = Transliterate::slugify($data['category']);
        }

        if (empty($data['image'])) {
            $image = 'null';
        } else {
            $image = $data['image'];
        }

        return new self([
            'category' => $category,
            'slug_category' => $slug_category,
            'image' => $image
        ]);
    }

}
