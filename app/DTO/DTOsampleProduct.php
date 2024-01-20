<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\Category\CreateCategoryRequest;
use App\Http\Requests\AdminPage\Product\SampleProductRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOsampleProduct extends DataTransferObject
{
    public int $category;
    public int $sub_category;

    public static function fromSampleProductRequest(SampleProductRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'category' => $data['category'],
            'sub_category' => $data['sub_category']
        ]);
    }

}
