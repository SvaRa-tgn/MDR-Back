<?php

namespace App\Repositories\Page\AdminPage\Color;

use App\DTO\DTOcreateColor;
use App\DTO\DTOupdateColor;
use App\Models\Color;
use App\Repositories\Page\AdminPage\Color\Interfaces\ColorRepositoryInterfaces;
use App\Services\Admin\UpdateStroageService;
use Illuminate\Database\Eloquent\Collection;
use Transliterate;

class ColorRepository implements ColorRepositoryInterfaces
{
    public function color(): Collection
    {
        return Color::all();
    }

    public function noColor(): Color
    {
        return Color::where('color', 'Без Цвета')->first();
    }

    public function createColor(DTOcreateColor $dto): Color
    {
        $color = New Color();
        $color->color = $dto->color;
        $color->slug_color = $dto->slug_color;
        $storage = 'public/color';
        $image = UpdateStroageService::updateImage($storage, $dto->image);
        $color->path = $image['path'];
        $color->link = $image['url'];
        $color->save();

        return $color;
    }

    public function editColor(string $slugColor): Color
    {
        return Color::where('slug_color', $slugColor)->firstOrFail();
    }

    public function updateColor(DTOupdateColor $dto, $id): Color
    {
        $color = Color::find($id);

        if($dto->color !== 'null'){
            $color->color = $dto->color;
            $color->slug_color = $dto->slug_color;;
            $color->save();
        }

        if($dto->image !== 'null'){
            UpdateStroageService::deleteImage($color->path);
            $storage = 'public/color';
            $image = UpdateStroageService::updateImage($storage, $dto->image);
            $color->path = $image['path'];
            $color->link = $image['url'];
            $color->save();
        }

        return $color;
    }

    public function destroyColor($id): void
    {
        $color = Color::find($id);

        UpdateStroageService::deleteImage($color->path);
        $color->delete();
    }

}
