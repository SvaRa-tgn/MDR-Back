<?php


namespace App\DTO;

use App\Http\Requests\AdminPage\ReadyCollection\ReadyCollectionRequest;
use Spatie\DataTransferObject\DataTransferObject;

class DTOreadyCollection extends DataTransferObject
{
    public string $ready_collection;

    public static function fromReadyCollectionRequest(ReadyCollectionRequest $request): self
    {
        $data = $request->validated();

        return new self([
            'ready_collection' => $data['ready_collection']
        ]);
    }

}
