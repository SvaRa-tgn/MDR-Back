<?php

namespace App\Actions\Admin\Color;

use App\Repositories\Page\AdminPage\Color\ColorRepository;
use Illuminate\Http\JsonResponse;

class DestroyColorAction
{
    public $action;

    public function __construct(ColorRepository $action)
    {
        $this->action = $action;
    }

    public function execute($id): JsonResponse
    {
        $this->action->destroyColor($id);

        return response()->json(route('color'));
    }

}
