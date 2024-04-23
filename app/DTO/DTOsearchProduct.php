<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\Product\SampleProductRequest;
use App\Http\Requests\AdminPage\Product\SearchProductRequest;
use Illuminate\Support\Str;
use Spatie\DataTransferObject\DataTransferObject;

class DTOsearchProduct extends DataTransferObject
{
    public string $search;

    public static function fromSearchProductRequest(SearchProductRequest $request): self
    {
        $data = $request->validated();
        $lover = Str::lower($data['search']);
        $f_name = Str::title($lover);

        return new self([
            'search' => $f_name,
        ]);
    }
}
