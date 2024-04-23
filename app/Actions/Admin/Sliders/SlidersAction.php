<?php

namespace App\Actions\Admin\Sliders;

use App\Repositories\Page\AdminPage\Sliders\SlidersRepository;
use App\Services\Admin\Sliders\SlidersService;
use Illuminate\View\View;

class SlidersAction
{
    public function __construct(private SlidersRepository $repository, private SlidersService $service){}

    public function execute(): View
    {
        $images = $this->repository->image();

        $sliders = $this->repository->sliders();

        $head = $this->service->title();

        return view ('/app-page/admin-page/admin-box/sliders/sliders', ['sliders' => $sliders, 'images' => $images, 'head' => $head]);
    }

}
