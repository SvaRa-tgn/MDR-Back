<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\Category\CreateCategoryRequest;
use Illuminate\Support\Str;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOcreateCategory extends DataTransferObject
{
    public string $category;
    public string $slug_category;
    public string $image;

    public static function fromCreateCategoryRequest(CreateCategoryRequest $request): self
    {
        $data = $request->validated();
        $lover = Str::lower($data['category']);
        $name = Str::ucfirst($lover);
        $slug_category = Transliterate::slugify($data['category']);

        return new self([
            'category' => $name,
            'slug_category' => $slug_category,
            'image' => $data['image']
        ]);
    }

}
