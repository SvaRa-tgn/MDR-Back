<?php
namespace App\Repositories\Page\AdminPage\ItemCollection\Interfaces;

use App\DTO\DTOitemCollection;
use App\DTO\DTOupdateItemCollection;
use App\Models\ItemCollection;
use Illuminate\Database\Eloquent\Collection;

interface ItemCollectionRepositoryInterfaces
{
    public function itemCollection(): Collection;

    public static function itemCollectionFind(int $id): ItemCollection;

    public function createItemCollection(DTOitemCollection $dto): ItemCollection;

    public function editItemCollection(string $slug_collection): ItemCollection;

    public function updateItemCollection(DTOupdateItemCollection $dto, int $id): ItemCollection;

    public function destroyItemCollection(ItemCollection $itemCollection): void;

    public function sampleCollections(string $type): array;

    public function modulCollections(): array;
}
