<?php

namespace App\Repositories\Page\AdminPage\ModulCollection;

use App\DTO\DTOmodulCollection;
use App\Models\ModulCollection;
use App\Repositories\Page\AdminPage\ModulCollection\Interfaces\ModulCollectionRepositoryInterfaces;
use Illuminate\Database\Eloquent\Collection;
use Transliterate;

class ModulCollectionRepository implements ModulCollectionRepositoryInterfaces
{
    public function modulCollection(): Collection
    {
        return ModulCollection::all();
    }

    public function createModulCollection(DTOmodulCollection $dto): ModulCollection
    {
        $modulCollection = New ModulCollection();
        $modulCollection->modul_collection = $dto->modul_collection;
        $modulCollection->slug_modul_collection = $dto->slug_modul_collection;
        $modulCollection->save();

        return $modulCollection;
    }

    public function editModulCollection($slug_modul_collection): ModulCollection
    {
        return ModulCollection::where('slug_modul_collection', $slug_modul_collection)->first();
    }

    public function updateModulCollection(DTOmodulCollection $dto, $id): ModulCollection
    {
        $modul_collection = ModulCollection::find($id);
        $modul_collection->modul_collection = $dto->modul_collection;
        $modul_collection->slug_modul_collection = $dto->slug_modul_collection;
        $modul_collection->save();

        return $modul_collection;
    }

    public function destroyModulCollection($id): void
    {
        $modul_collection = ModulCollection::find($id);
        $modul_collection->delete();
    }

}
