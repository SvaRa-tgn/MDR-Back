<?php

namespace App\DTO;

use App\Http\Requests\AdminPage\ReadyCollection\ReadyCollectionRequest;
use Spatie\DataTransferObject\DataTransferObject;
use Transliterate;

class DTOreadyCollection extends DataTransferObject
{
    public string $ready_collection;
    public string $slug_ready_collection;

    public static function fromReadyCollectionRequest(ReadyCollectionRequest $request): self
    {
        $data = $request->validated();
        $slug_ready_collection = Transliterate::slugify($data['ready_collection']);

        return new self([
            'ready_collection' => $data['ready_collection'],
            'slug_ready_collection' => $slug_ready_collection
        ]);
    }

}
