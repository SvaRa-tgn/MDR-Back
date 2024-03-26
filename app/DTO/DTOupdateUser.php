<?php

namespace App\DTO;

use App\Http\Requests\UsersUpdate\UpdateUserRequest;
use Carbon\Carbon;
use Illuminate\Support\Str;
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
    public string $date_of_birth;
    public string $gender;

    public static function fromUpdateUserRequest(UpdateUserRequest $request): self
    {
        $data = $request->validated();

        if(empty($data['name'])){
            $name = 'null';
            $slug_name = 'null';
        } else {
            $lover = Str::lower($data['name']);
            $name = Str::title($lover);
            $slug_name = Transliterate::slugify($data['name']);
        }

        if(empty($data['father_name'])){
            $father_name = 'null';
            $slug_father_name = 'null';
        } else {
            $lover = Str::lower($data['father_name']);
            $father_name = Str::title($lover);
            $slug_father_name = Transliterate::slugify($data['father_name']);
        }

        if(empty($data['familia'])){
            $familia = 'null';
            $slug_familia = 'null';
        } else {
            $lover = Str::lower($data['familia']);
            $familia = Str::title($lover);
            $slug_familia = Transliterate::slugify($data['familia']);
        }

        if(empty($data['phone'])){
            $phone = 'null';
        } else {
            $phone = $data['phone'];
        }

        if(empty($data['date'])){
            $date_of_birth = 'null';
        } else {
            $date_of_birth = $data['date'];
        }

        if(empty($data['gender'])){
            $gender = 'null';
        } else {
            $gender = $data['gender'];
        }

        return new self([
            'name' => $name,
            'slug_name' => $slug_name,
            'familia' => $familia,
            'slug_familia' => $slug_familia,
            'father_name' => $father_name,
            'slug_father_name' => $slug_father_name,
            'phone' => $phone,
            'date_of_birth' => $date_of_birth,
            'gender' => $gender,
        ]);
    }
}
