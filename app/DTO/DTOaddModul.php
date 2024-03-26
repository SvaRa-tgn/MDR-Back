<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\Product\AddModulRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOaddModul extends DataTransferObject
{
    public int $modul_item;

    public static function fromAddModulRequest(AddModulRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'modul_item' => $data['modul_item']
        ]);
    }

}
