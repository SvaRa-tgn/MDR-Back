<?php


namespace App\DTO;

use App\Http\Requests\UsersUpdate\UpdateUserPasswordRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOupdateUserPassword extends DataTransferObject
{
    public string $password;

    public static function fromUpdateUserPasswordRequest(UpdateUserPasswordRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'password' => $data['password']
        ]);
    }
}
