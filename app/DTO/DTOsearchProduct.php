<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\Product\SampleProductRequest;
use App\Http\Requests\AdminPage\Product\SearchProductRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOsearchProduct extends DataTransferObject
{
    public string $search;

    public static function fromSearchProductRequest(SearchProductRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'search' => $data['search'],
        ]);
    }

}
