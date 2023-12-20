<?php


namespace App\Repositories\Page\AdminPage\ModulCollection;

use App\Models\Category;
use App\Models\ModulCollection;
use App\Repositories\Page\AdminPage\Category\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Transliterate;

class ModulCollectionRepository
{
    public function createModulCollection($data)
    {
        $modulCollection = New ModulCollection();
        $modulCollection->modul_collection = $data->modul_collection;
        $modulCollection->slug_modul_collection = Transliterate::slugify($data->modul_collection);
        $modulCollection->save();
    }

    public function showModulCollection()
    {
        $modulCollections = ModulCollection::all();

            return $modulCollections;
    }

    public function editModulCollection($slug_modul_collection)
    {
        $modul_collection = ModulCollection::where('slug_modul_collection', $slug_modul_collection)->first();

        if(empty($modul_collection) OR $modul_collection === null){
            return abort(404);
        } else {
            $id = $modul_collection->id;
            $name = $modul_collection->modul_collection;
            $slug_modul_collection = $modul_collection->slug_modul_collection;

            $modul_collection = collect(['id' => $id, 'name' => $name, 'slug_modul_collection' => $slug_modul_collection]);

            return $modul_collection;
        }

    }

    public function updateModulCollection($data, $id)
    {
        $modul_collection = ModulCollection::find($id);
        $modul_collection->modul_collection = $data->modul_collection;
        $modul_collection->slug_modul_collection = Transliterate::slugify($data->modul_collection);
        $modul_collection->save();

        return $modul_collection;
    }

    public function destroyModulCollection($id)
    {
        $modul_collection = ModulCollection::find($id);
        $modul_collection->delete();
    }

}
