<?php

namespace App\Actions\Admin\Color;

use App\DTO\DTOupdateColor;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use Illuminate\Http\JsonResponse;

class UpdateColorAction
{
    public function __construct(private ColorRepository $colorRepository){}

    public function execute($request, int $id): JsonResponse
    {
        $color = $this->colorRepository->updateColor(DTOupdateColor::fromUpdateColorRequest($request), $id );

        return response()->json(route('editColor', $color->slug_color));
    }

}
