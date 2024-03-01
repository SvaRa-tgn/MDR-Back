<?php
namespace App\Repositories\Page\AdminPage\ModulCollection\Interfaces;

use App\DTO\DTOmodulCollection;
use App\Models\ModulCollection;
use Illuminate\Database\Eloquent\Collection;

interface ModulCollectionRepositoryInterfaces
{
    public function modulCollection(): Collection;

    public function createModulCollection(DTOmodulCollection $dto): ModulCollection;

    public function editModulCollection($slug_modul_collection): ModulCollection;

    public function  updateModulCollection(DTOmodulCollection $dto, $id): ModulCollection;

    public function destroyModulCollection($id): void;
}
