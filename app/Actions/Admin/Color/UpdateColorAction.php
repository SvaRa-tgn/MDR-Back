<?php

namespace App\Actions\Admin\Color;

use App\DTO\DTOupdateColor;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use Illuminate\Http\JsonResponse;

class UpdateColorAction
{
    public $action;

    public function __construct(ColorRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id): JsonResponse
    {
        $color = $this->action->updateColor(DTOupdateColor::fromUpdateColorRequest($request), $id );

        return response()->json(route('editColor', $color->slug_color));
    }

}
