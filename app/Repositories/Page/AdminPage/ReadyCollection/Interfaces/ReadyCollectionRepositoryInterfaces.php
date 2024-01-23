<?php
namespace App\Repositories\Page\AdminPage\ReadyCollection\Interfaces;


interface ReadyCollectionRepositoryInterfaces
{
    public function createReadyCollection($data);

    public function readyCollection();

    public function editReadyCollection($slug_ready_collection);

    public function updateReadyCollection($data, $id);

    public function destroyReadyCollection($id);
}
