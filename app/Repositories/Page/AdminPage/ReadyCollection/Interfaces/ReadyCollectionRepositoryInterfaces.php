<?php
namespace App\Repositories\Page\AdminPage\ReadyCollection\Interfaces;

use App\DTO\DTOreadyCollection;
use App\Models\ReadyCollection;
use Illuminate\Database\Eloquent\Collection;

interface ReadyCollectionRepositoryInterfaces
{
    public function readyCollection(): Collection;

    public function createReadyCollection(DTOreadyCollection $dto): ReadyCollection;

    public function editReadyCollection($slug_ready_collection): ReadyCollection;

    public function updateReadyCollection(DTOreadyCollection $dto, $id): ReadyCollection;

    public function destroyReadyCollection($id): void;
}
