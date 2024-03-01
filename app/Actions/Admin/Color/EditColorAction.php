<?php

namespace App\Actions\Admin\Color;

use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Services\Admin\Color\EditColorService;

class EditColorAction
{
    public $action;

    private $service;

    public function __construct(ColorRepository $action, EditColorService$service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute($slug_color)
    {
        $color = $this->action->editColor($slug_color);

        if(empty($color) OR $color === null){
            return abort(404);
        } else {
            $head = $this->service->editTitle($color->color);

            return view ('/app-page/admin-page/admin-box/color/edit-color', ['color' => $color, 'head' => $head]);
        }
    }
}
