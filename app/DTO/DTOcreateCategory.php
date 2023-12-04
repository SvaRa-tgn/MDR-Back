<?php


namespace App\DTO;


use Spatie\DataTransferObject\DataTransferObject;

class DTOcreateCategory extends DataTransferObject
{
    public string $category;

    public string $image;

}
