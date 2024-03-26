<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\ItemCollection\ItemCollectionRequest;
use Illuminate\Support\Str;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOitemCollection extends DataTransferObject
{
    public string $type_collection;
    public string $slug_type_collection;
    public string $collection;
    public string $slug_collection;

    public static function fromItemCollectionRequest(ItemCollectionRequest $request): self
    {
        $data = $request->validated();
        if($data['type_collection'] === 'Модульная коллекция'){
            $type = 'modul_collection';
        } else {
            $type = 'ready_collection';
        }

        $lover = Str::lower($data['collection']);
        $name = Str::title($lover);

        $slug_collection = Transliterate::slugify($data['collection']);

        return new self([
            'type_collection' => $data['type_collection'],
            'slug_type_collection' => $type,
            'collection' => $name,
            'slug_collection' => $slug_collection
        ]);
    }

}
