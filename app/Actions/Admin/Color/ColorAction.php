<?php

namespace App\Actions\Admin\Color;

use App\Repositories\Page\AdminPage\Color\ColorRepository;
use App\Services\Admin\Color\ColorService;
use Illuminate\View\View;

class ColorAction
{
    public $action;

    private $service;

    public function __construct(ColorRepository $action, ColorService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute(): View
    {
        $colors = $this->action->color();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/color/color', ['colors' => $colors, 'head' => $head]);
    }

}
