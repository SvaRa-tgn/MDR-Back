<?php


namespace App\DTO;


use Spatie\DataTransferObject\DataTransferObject;

class DTOupdateUser extends DataTransferObject
{
    public string $name;
    public string $familia;
    public string $father_name;
    public string $phone;
}
