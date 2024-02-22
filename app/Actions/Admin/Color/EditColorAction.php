<?php

namespace App\Actions\Admin\Color;

use App\Http\Controllers\Controller;
use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Services\Admin\Color\EditColorService;

class EditColorAction extends Controller
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

        $head = $this->service->title($color);

        return view ('/app-page/admin-page/admin-box/color/edit-color', ['color' => $color, 'head' => $head]);
    }

}
