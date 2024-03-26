<?php
namespace App\Repositories\Page\AdminPage\Color\Interfaces;


use App\DTO\DTOcreateColor;
use App\DTO\DTOupdateColor;
use App\Models\Color;
use Illuminate\Database\Eloquent\Collection;

interface ColorRepositoryInterfaces
{
    public function color(): Collection;

    public function createColor(DTOcreateColor $dto): Color;

    public function editColor($slug_color): Color| null;

    public function  updateColor(DTOupdateColor $dto, $id): Color;

    public function destroyColor($id): void;
}
