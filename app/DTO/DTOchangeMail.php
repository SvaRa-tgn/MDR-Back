<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\Color\CreateColorRequest;
use App\Http\Requests\Auth\ChangeMailRequest;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOchangeMail extends DataTransferObject
{
    public string $email;

    public static function fromChangeMailRequest(ChangeMailRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'email' => $data['email']
        ]);
    }

}
