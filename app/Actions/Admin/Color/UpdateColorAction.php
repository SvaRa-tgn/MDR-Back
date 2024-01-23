<?php

namespace App\Actions\Admin\Color;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Color\ColorRepository;

class UpdateColorAction extends Controller
{
    public $action;

    public function __construct(ColorRepository $action)
    {
        $this->action = $action;
    }

    public function execute($request, $id)
    {
        $color = $this->action->updateColor($request, $id );

        return response()->json(route('editColor', $color->slug_color));
    }

}
