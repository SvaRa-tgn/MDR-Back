<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\ModulCollection\ModulCollectionRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOmodulCollection extends DataTransferObject
{
    public string $modul_collection;

    public static function fromModulCollectionRequest(ModulCollectionRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'modul_collection' => $data['modul_collection']
        ]);
    }

}
