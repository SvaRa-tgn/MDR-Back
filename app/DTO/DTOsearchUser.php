<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\Users\SearchUserRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOsearchUser extends DataTransferObject
{
    public string $search;

    public static function fromSearchUserRequest(SearchUserRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'search' => $data['search_user'],
        ]);
    }

}
