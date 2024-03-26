<?php

namespace App\Actions\Admin\Sliders;

use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use App\Services\Admin\Sliders\SlidersService;
use Illuminate\View\View;

class SlidersAction
{
    public $action;

    public $service;

    public function __construct(SlidersRepository $action, SlidersService $service)
    {
        $this->action = $action;

        $this->service = $service;
    }

    public function execute(): View
    {
        $images = $this->action->image();

        $sliders = $this->action->sliders();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/sliders/sliders', ['sliders' => $sliders, 'images' => $images, 'head' => $head]);
    }

}
