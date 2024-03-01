<?php


namespace App\DTO;

use App\Http\Requests\UsersUpdate\UpdateUserRequest;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOupdateUser extends DataTransferObject
{
    public string $name;
    public string $slug_name;
    public string $familia;
    public string $slug_familia;
    public string $father_name;
    public string $slug_father_name;
    public string $phone;

    public static function fromUpdateUserRequest(UpdateUserRequest $request): self
    {
        $data = $request->validated();

        if(empty($data['name'])){
            $name = 'null';
            $slug_name = 'null';
        } else {
            $name = $data['name'];
            $slug_name = Transliterate::slugify($data['name']);
        }

        if(empty($data['father_name'])){
            $father_name = 'null';
            $slug_father_name = 'null';
        } else {
            $father_name = $data['father_name'];
            $slug_father_name = Transliterate::slugify($data['father_name']);
        }

        if(empty($data['familia'])){
            $familia = 'null';
            $familia = 'null';
        } else {
            $familia = $data['familia'];
            $slug_familia = Transliterate::slugify($data['familia']);
        }

        if(empty($data['phone'])){
            $phone = 'null';
        } else {
            $phone = $data['phone'];
        }

        return new self([
            'name' => $name,
            'slug_name' => $slug_name,
            'familia' => $familia,
            'slug_familia' => $slug_familia,
            'father_name' => $father_name,
            'slug_father_name' => $slug_father_name,
            'phone' => $phone
        ]);
    }
}
