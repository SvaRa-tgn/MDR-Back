<?php


namespace App\DTO;


use App\Http\Requests\AdminPage\SubCategory\SubCategoryCreateRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOcreateSubCategory extends DataTransferObject
{
    public string $category;
    public string $sub_category;
    public string $image;

    public static function fromCreateSubCategoryRequest(SubCategoryCreateRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'category' => $data['category'],
            'sub_category' => $data['sub_category'],
            'image' => $data['image']
        ]);
    }

}
