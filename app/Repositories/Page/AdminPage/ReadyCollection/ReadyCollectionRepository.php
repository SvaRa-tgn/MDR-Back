<?php


namespace App\Repositories\Page\AdminPage\ReadyCollection;

use App\Models\ReadyCollection;
use App\Repositories\Page\AdminPage\ReadyCollection\Interfaces\ReadyCollectionRepositoryInterfaces;
use Transliterate;

class ReadyCollectionRepository implements ReadyCollectionRepositoryInterfaces
{
    public function createReadyCollection($data)
    {
        $readyCollection = New ReadyCollection();
        $readyCollection->ready_collection = $data->ready_collection;
        $readyCollection->slug_ready_collection = Transliterate::slugify($data->ready_collection);
        $readyCollection->save();
    }

    public function readyCollection()
    {
        $readyCollections = ReadyCollection::all();

            return $readyCollections;
    }

    public function editReadyCollection($slug_ready_collection)
    {
        $ready_collection = ReadyCollection::where('slug_ready_collection', $slug_ready_collection)->first();

        if(empty($ready_collection) OR $ready_collection === null){
            return abort(404);
        } else {
            $id = $ready_collection->id;
            $name = $ready_collection->ready_collection;
            $slug_ready_collection = $ready_collection->slug_mready_collection;

            $ready_collection = collect(['id' => $id, 'name' => $name, 'slug_ready_collection' => $slug_ready_collection]);

            return $ready_collection;
        }
    }

    public function updateReadyCollection($data, $id)
    {
        $ready_collection = ReadyCollection::find($id);
        $ready_collection->ready_collection = $data->ready_collection;
        $ready_collection->slug_ready_collection = Transliterate::slugify($data->ready_collection);
        $ready_collection->save();

        return $ready_collection;
    }

    public function destroyReadyCollection($id)
    {
        $ready_collection = ReadyCollection::find($id);
        $ready_collection->delete();
    }

}
