<?php
namespace App\Repositories\Page\AdminPage\ModulCollection\Interfaces;


interface ModulCollectionRepositoryInterfaces
{
    public function createModulCollection($data);

    public function modulCollection();

    public function editModulCollection($slug_modul_collection);

    public function  updateModulCollection($data, $id);

    public function destroyModulCollection($id);
}
