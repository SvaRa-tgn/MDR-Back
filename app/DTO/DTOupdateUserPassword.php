<?php


namespace App\DTO;


use Spatie\DataTransferObject\DataTransferObject;

class DTOupdateUserPassword extends DataTransferObject
{
    public string $password;
}
