<?php
namespace App\Repositories\Page\AdminPage\ItemCollection\Interfaces;

use App\DTO\DTOitemCollection;
use App\DTO\DTOupdateItemCollection;
use App\Models\ItemCollection;
use Illuminate\Database\Eloquent\Collection;

interface ItemCollectionRepositoryInterfaces
{
    public function itemCollection(): Collection;

    public function createItemCollection(DTOitemCollection $dto): ItemCollection;

    public function editItemCollection($slug_collection): ItemCollection| null;

    public function updateItemCollection(DTOupdateItemCollection $dto, $id): ItemCollection;

    public function destroyItemCollection($id): void;

    public function sampleCollections($type): array;

    public function modulCollections(): array;
}
