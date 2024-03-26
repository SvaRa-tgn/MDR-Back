<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\ItemCollection\UpdateItemCollectionRequest;
use Illuminate\Support\Str;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOupdateItemCollection extends DataTransferObject
{
    public string $type_collection;
    public string $slug_type_collection;
    public string $collection;
    public string $slug_collection;

    public static function fromUpdateItemCollectionRequest(UpdateItemCollectionRequest $request): self
    {
        $data = $request->validated();
        if($data['type_collection'] === 'Модульная коллекция'){
            $type = 'modul_collection';
        } else {
            $type = 'ready_collection';
        }

        if(empty($data['collection'])){
            $name = 'null';
            $slug_collection = 'null';
        } else {
            $lover = Str::lower($data['collection']);
            $name = Str::title($lover);

            $slug_collection = Transliterate::slugify($data['collection']);
        }

        return new self([
            'type_collection' => $data['type_collection'],
            'slug_type_collection' => $type,
            'collection' => $name,
            'slug_collection' => $slug_collection
        ]);
    }

}
