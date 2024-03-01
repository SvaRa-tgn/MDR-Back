<?php


namespace App\Repositories\Page\AdminPage\ReadyCollection;

use App\DTO\DTOreadyCollection;
use App\Models\ReadyCollection;
use App\Repositories\Page\AdminPage\ReadyCollection\Interfaces\ReadyCollectionRepositoryInterfaces;
use Illuminate\Database\Eloquent\Collection;
use Transliterate;

class ReadyCollectionRepository implements ReadyCollectionRepositoryInterfaces
{
    public function readyCollection(): Collection
    {
        return ReadyCollection::all();
    }

    public function createReadyCollection(DTOreadyCollection $dto): ReadyCollection
    {
        $readyCollection = New ReadyCollection();
        $readyCollection->ready_collection = $dto->ready_collection;
        $readyCollection->slug_ready_collection = $dto->slug_ready_collection;
        $readyCollection->save();

        return $readyCollection;
    }

    public function editReadyCollection($slug_ready_collection): ReadyCollection
    {
        return ReadyCollection::where('slug_ready_collection', $slug_ready_collection)->first();
    }

    public function updateReadyCollection(DTOreadyCollection $dto, $id): ReadyCollection
    {
        $ready_collection = ReadyCollection::find($id);
        $ready_collection->ready_collection = $dto->ready_collection;
        $ready_collection->slug_ready_collection = $dto->slug_ready_collection;
        $ready_collection->save();

        return $ready_collection;
    }

    public function destroyReadyCollection($id): void
    {
        $ready_collection = ReadyCollection::find($id);
        $ready_collection->delete();
    }

}
