<?php

namespace App\Repositories\Page\AdminPage\ItemCollection;

use App\DTO\DTOitemCollection;
use App\DTO\DTOupdateItemCollection;
use App\Models\ItemCollection;
use App\Repositories\Page\AdminPage\ItemCollection\Interfaces\ItemCollectionRepositoryInterfaces;
use Illuminate\Database\Eloquent\Collection;
use Transliterate;

class ItemCollectionRepository implements ItemCollectionRepositoryInterfaces
{
    public function itemCollection(): Collection
    {
        return ItemCollection::all();
    }

    public function createItemCollection(DTOitemCollection $dto): ItemCollection
    {
        $itemCollection = new ItemCollection();
        $itemCollection->type_collection = $dto->type_collection;
        $itemCollection->slug_type_collection = $dto->slug_type_collection;
        $itemCollection->collection = $dto->collection;
        $itemCollection->slug_collection = $dto->slug_collection;
        $itemCollection->save();

        return $itemCollection;
    }

    public function editItemCollection($slug_collection): ItemCollection|null
    {
        return ItemCollection::where('slug_collection', $slug_collection)->first();
    }

    public function updateItemCollection(DTOupdateItemCollection $dto, $id): ItemCollection
    {
        $itemCollection = ItemCollection::find($id);
        $itemCollection->type_collection = $dto->type_collection;
        $itemCollection->slug_type_collection = $dto->slug_type_collection;
        if ($dto->collection !== 'null') {
            $itemCollection->collection = $dto->collection;
            $itemCollection->slug_collection = $dto->slug_collection;
        }

        $itemCollection->save();

        return $itemCollection;
    }

    public function destroyItemCollection($id): void
    {
        $itemCollection = ItemCollection::find($id);
        $itemCollection->delete();
    }

    public function sampleCollections($type): array
    {
        return ItemCollection::where('type_collection', $type)->get()->toArray();
    }

    public function modulCollections(): array
    {
        return ItemCollection::where('type_collection', 'Модульная коллекция')->get()->toArray();
    }

}
