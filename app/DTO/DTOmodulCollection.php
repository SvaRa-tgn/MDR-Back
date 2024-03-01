<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\ModulCollection\ModulCollectionRequest;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOmodulCollection extends DataTransferObject
{
    public string $modul_collection;
    public string $slug_modul_collection;

    public static function fromModulCollectionRequest(ModulCollectionRequest $request): self
    {
        $data = $request->validated();
        $slug_modul_collection = Transliterate::slugify($data['modul_collection']);

        return new self([
            'modul_collection' => $data['modul_collection'],
            'slug_modul_collection' => $slug_modul_collection
        ]);
    }

}
