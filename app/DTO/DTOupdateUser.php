<?php


namespace App\DTO;

use App\Http\Requests\UsersUpdate\UpdateUserRequest;
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

        if(empty($data['name'])){
            $name = 'null';
        } else {
            $name = $data['name'];
        }

        if(empty($data['father_name'])){
            $father_name = 'null';
        } else {
            $father_name = $data['father_name'];
        }

        if(empty($data['familia'])){
            $familia = 'null';
        } else {
            $familia = $data['familia'];
        }

        if(empty($data['phone'])){
            $phone = 'null';
        } else {
            $phone = $data['phone'];
        }

        return new self([
            'name' => $name,
            'familia' => $familia,
            'father_name' => $father_name,
            'phone' => $phone
        ]);
    }
}
