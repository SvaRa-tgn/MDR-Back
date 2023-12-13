<?php


namespace App\DTO;

use App\Http\Requests\ProfilePage\Profile\UpdateUserRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOupdateUser extends DataTransferObject
{
    public string $name;
    public string $familia;
    public string $father_name;
    public string $phone;

    public static function fromUpdateUserRequest(UpdateUserRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'name' => $data['name'],
            'familia' => $data['familia'],
            'father_name' => $data['father_name'],
            'phone' => $data['phone']
        ]);
    }
}
